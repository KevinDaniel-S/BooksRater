@extends('main')

@section('title', 'Libros')

@section('componente')
<div class="container mt-3">
    <div class="row justify-content-center">
        <h3>Libros</h3>
    </div>
    <div class="row">
        <div class="col">
            Agregar nuevo libro:
            <a href="/libros/insertar" role="button" class="btn btn-success">Insertar</a>
        </div>
    </div>
    <br>
    <div class="row">
        <table class="table table-striped table-bordered" id="libros">
            <thead class="thead-dark">
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Número de páginas</th>
                    <th>Fecha de publicación</th>
                    <th></th><th></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{$book->titulo}}</td>
                        <td>{{$book->autor}}</td>
                        <td>{{$book->editorial}}</td>
                        <td>{{$book->numeroPaginas}}</td>
                        <td>{{$book->fechaPublicacion}}</td>
                        <td>
                            <button type="button" class="btn btn-warning"
                                onclick="document.getElementById('select-form-{{$book->id}}').submit();">
                                Actualizar
                            </button>
                            <form id="select-form-{{$book->id}}" action="/libros/{{$book->id}}" 
                                method="GET" class="hidden">
                            </form> 
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger"
                                onclick="document.getElementById('delete-form-{{$book->id}}').submit();">
                                    Eliminar
                            </button>
                            <form id="delete-form-{{$book->id}}" action="/libros/{{$book->id}}" 
                                method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{ $books->links() }}
    </div>
</div>
@endsection
   

