@extends('ratings.rate')

@section('operation', 'Actualiza tu voto')

@section('method')
  @method('PUT')
@endsection

@section('stars')
  <input type="radio" name="rate" value="5" id="star5" 
    {{$review->voto==5?'checked':''}}>
    <label class="fas fa-star" for="star5"></label>
  <input type="radio" name="rate" value="4" id="star4"
    {{$review->voto==4 ? 'checked':''}}>
    <label class="fas fa-star" for="star4"></label>
  <input type="radio" name="rate" value="3" id="star3"
    {{$review->voto==3 ? 'checked':''}}>
    <label class="fas fa-star" for="star3"></label>
  <input type="radio" name="rate" value="2" id="star2"
    {{$review->voto==2 ? 'checked':''}}>
    <label class="fas fa-star" for="star2"></label>
  <input type="radio" name="rate" value="1" id="star1"
  {{$review->voto==1 ? 'checked':''}}>
    <label class="fas fa-star" for="star1"></label>
@endsection

@section('comentario')
{{$review->comentario}}
@endsection

@section('boton', 'Actualizar')
