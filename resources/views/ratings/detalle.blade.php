@extends('main')

@section('title', 'Rate')

@section('componente')

<div class="container">
  <div class="row p-4 d-flex align-items-stretch">
    <div class="col-sm-6 p-2">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title">{{$book->titulo}}</h3>
          <h4>Autor: {{$book->autor}}</h4>
          <h4>Editorial: {{$book->editorial}}</h4>
          <p>Número páginas: {{$book->numeroPaginas}}</p>
          <div class"row">
            <i class="fas fa-star {{($book->avgRating>=1) ? 'gold':'black'}}"></i>
            <i class="fas fa-star {{($book->avgRating>=2) ? 'gold':'black'}}"></i>
            <i class="fas fa-star {{($book->avgRating>=3) ? 'gold':'black'}}"></i>
            <i class="fas fa-star {{($book->avgRating>=4) ? 'gold':'black'}}"></i>
            <i class="fas fa-star {{($book->avgRating>=5) ? 'gold':'black'}}"></i>
            ({{$book->noRating}})
          </div>
        </div>
      </div>
    </div>
    @if(!$hasVoted)
      @include('ratings.rate')
    @else
      @include('ratings.update')
    @endif
  </div>
  <h2>Comentarios</h2>
  <div class="row p-4 d-flex align-items-stretch">
  @forelse($comentarios as $comentario)
    <div class="col-sm-6 p-2">
      <div class="card">
        <div class="card-body">
          <span>Usuario: {{$comentario->name}}</span>
          <i class="fas fa-star {{($comentario->voto>=1) ? 'gold':'black'}}"></i>
          <i class="fas fa-star {{($comentario->voto>=2) ? 'gold':'black'}}"></i>
          <i class="fas fa-star {{($comentario->voto>=3) ? 'gold':'black'}}"></i>
          <i class="fas fa-star {{($comentario->voto>=4) ? 'gold':'black'}}"></i>
          <i class="fas fa-star {{($comentario->voto>=5) ? 'gold':'black'}}"></i>
          <p>{{$comentario->comentario}}</p>
        </div>
      </div>
    </div>
  </div>
  @empty
    No hay comentarios
  @endforelse
</div>
  @endsection

