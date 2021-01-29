@include('components.header')
@include('components.navbar')

@section('componente')
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">La biblioteca</h1>
          <p class="lead mb-5 text-white-50">Califica los libros que has leído</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>¿Qué hacemos?</h2>
        <hr>
        <p>Recopilamos datos de los libros para que puedas calificarlos.</p>
        <p>Puedes ver los libros que han leído otras personas y decidir si vale la pena leerlo dependiendo de su rating</p>
        <a class="btn btn-primary btn-lg" href="/rating">Calificar Libros &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contáctanos</h2>
        <hr>
        <address>
          <strong>La biblioteca</strong>
          <br>
        </address>
        <address>
          Teléfono:
          (123) 456-7890
          <br>
          Correo:
          <a href="mailto:#">contacto@laBiblioteca.com</a>
        </address>
      </div>
    </div>
  </div>
@show

@include('components.footer')

