<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> 
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="navbar-brand" href="/">La biblioteca</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/libros">Libros</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/libros/insertar">Insertar libros</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/rating">Rating libros</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
      @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
      @endguest
    </ul>
  </div>
</nav>
