@extends('main')

@section('title', 'Ratings')

@section('componente')
<div class="container">
  <h1 class="p-4">Ratings</h1>
  <div class="row p-4">
    @foreach($books as $book)
      <div class="col-sm-4 p-2">
        <div class="card mb-3 h-100">
          <div class="card-body">
            <h4 class="card-title">{{$book->titulo}}</h4>
            <h5>Autor: {{$book->autor}}</h5>
            <h5>Editorial: {{$book->editorial}}</h5>
            <p>Número páginas: {{$book->numeroPaginas}}</p>
              <i class="fas fa-star {{($book->avgRating>=1) ? 'gold':'black'}}"></i>
              <i class="fas fa-star {{($book->avgRating>=2) ? 'gold':'black'}}"></i>
              <i class="fas fa-star {{($book->avgRating>=3) ? 'gold':'black'}}"></i>
              <i class="fas fa-star {{($book->avgRating>=4) ? 'gold':'black'}}"></i>
              <i class="fas fa-star {{($book->avgRating>=5) ? 'gold':'black'}}"></i>
              ({{$book->noRating}})
            <a href="rating/{{$book->id}}" class="btn btn-primary">Detalles</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection  
