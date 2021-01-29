@extends('insert')

@section('title', 'Actualizar libro')

@section('seccion')
  Modificar libro
@endsection

@section('mensaje')
    {{$mensaje ?? ''}}
@endsection

@section('accion')
{{$book->id}}
@endsection

@section('method')
  @method('PUT')
@endsection

@section('tituloLibro')
  value="{{$book->titulo}}"
@endsection

@section('autorLibro')
  value="{{$book->autor}}"
@endsection

@section('editorialLibro')
  value="{{$book->editorial}}"
@endsection

@section('paginasLibro')
  value="{{$book->numeroPaginas}}"
@endsection

@section('fechaLibro')
 value="{{$book->fechaPublicacion}}"
@endsection

@section('boton')
Actualizar
@endsection

