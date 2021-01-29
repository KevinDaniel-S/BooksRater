<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\UserNotFoundException;
use App\Book; 

class Books extends Controller
{
    public function index(Request $request){
        $books = Book::paginate(3);
        return view('libros', compact('books'));
    }

    public function insert(Request $request){
        return view('insert');
    }

    public function create(Request $request){
        $book = new Book;
        $book->titulo = $request->input('titulo');
        $book->autor = $request->input('autor');
        $book->editorial = $request->input('editorial');
        $book->numeroPaginas = $request->input('paginas');
        $book->fechaPublicacion = $request->input('fecha');
        
        $book->save();

        $books = Book::paginate(3);
        return view('libros', compact('books'));
    }

    public function select(Request $request, $id){
      
        try {      
          $book = Book::findOrFail($id); 
        }catch(\Exception $e){
          return view('books.notfound', compact('id'));
        }

        return view('select', compact('book'));
    }

    public function delete(Request $request, $id){
        Book::destroy($id);
        return redirect('libros');
    }

    public function update(Request $request, $id){
       $book = Book::find($id); 

       $book->titulo = $request->input('titulo');
       $book->autor = $request->input('autor');
       $book->editorial = $request->input('editorial');
       $book->numeroPaginas = $request->input('paginas');
       $book->fechaPublicacion = $request->input('fecha');
        
       $book->save();

       $mensaje = 'Libro actualizado correctamente';
       return view('select', compact('book', 'mensaje'));
    }
}
