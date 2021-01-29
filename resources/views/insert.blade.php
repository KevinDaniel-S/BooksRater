@extends('main')

@section('title', 'Insertar libros')

@section('componente')

<div class="container mt-3">
    <div class="row justify-content-center">
        <h3>@yield('seccion', 'Insertar libro')</h3>
    </div>
    @yield('mensaje')
    <form method="POST" action="/libros/@yield('accion')">
        @yield('method')
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo"
                name="titulo" placeholder="Introducir titulo"
                @yield('tituloLibro') 
                required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor"
                name="autor" placeholder="Introducir autor"
                @yield('autorLibro')
                required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="editorial">Editorial</label>
                <input type="text" class="form-control"
                    id="editorial" name="editorial"
                    @yield('editorialLibro')
                    required>
            </div>
            <div class="form-group col-md-3">
                <label for="numeroPaginas">Número de páginas</label>
                <input type="number" class="form-control" 
                    id="numeroPaginas" name="paginas" 
                    @yield('paginasLibro')
                   required>
            </div>
            <div class="form-group col-md-3">
                <label for="fecha">Fecha de publicación</label>
                <input type="date" class="form-control"
                    id="fecha" name="fecha" 
                    @yield('fechaLibro')                              
                    required>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="@yield('boton', 'Insertar')">
        <a href="/libros/" role="button" class="btn btn-secondary">Volver</a>
    </form>
</div>

@endsection
