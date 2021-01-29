<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\UserNotFoundException;
use App\Book;
use App\Review;

class Rating extends Controller
{
  public function index(){
    $books = Book::orderBy('avgRating', 'desc')->
      orderBy('noRating','desc')->get(); 
    return view('ratings.index', compact('books'));
  }

  public function detalle(Request $request, $id){
    $book = Book::find($id);
    $hasVoted = False;
    $comentarios = Review::select('reviews.voto', 'reviews.comentario', 'users.name')->
      join('users', 'reviews.user_id','=', 'users.id')->
      where('libro_id', $id);
    if(Auth::check()){
      $userId = Auth::id();
      $review = Review::where('libro_id', $id)->where('user_id', $userId)->first();
      $comentarios = $comentarios->where('user_id', '!=', $userId)->get();
      if($review!=Null){
        $hasVoted=True;
      }
    } else{
      $comentarios = $comentarios->get();
    }
    return view('ratings.detalle', compact('book', 'hasVoted', 'review', 'comentarios'));
  }

  public function votar(Request $request, $id){
    $review = new Review;
    $review->libro_id = $id;
    $review->user_id = Auth::id();
    $review->voto = $request->input('rate');
    $review->comentario = $request->input('comentario');

    $review->save();

    $book = Book::find($id);
    $book->noRating += 1;
    $book->totRating += $review->voto;
    $book->avgRating = $book->totRating / $book->noRating;

    $book->save();
    return $this->detalle($request, $id);
  }

  public function actualizar(Request $request, $id){
    $userId = Auth::id();
    $review = Review::where('libro_id', $id)->where('user_id', $userId)->first();
    $old = $review->voto;
    $review->voto = $request->input('rate');
    $review->comentario = $request->input('comentario');
 
    $review->save();

    $book = Book::find($id);
    $book->totRating += $review->voto - $old;
    $book->avgRating = $book->totRating / $book->noRating;

    $book->save();
    return $this->detalle($request, $id);
  }
}
?>
