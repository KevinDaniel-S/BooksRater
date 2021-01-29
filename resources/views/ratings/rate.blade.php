  <div class="col-sm-6 p-2">
    <div class="card h-100">
      <div class="card-body">
        <h3 class="card-title">@yield('operation','Calífica el libro')</h3>
        <form action="/rating/{{$book->id}}" method="POST">
        @yield('method')
        @csrf
        <div class="stars">
          @section('stars')
          <input type="radio" name="rate" value="5" id="star5" required>
            <label class="fas fa-star" for="star5"></label>
          <input type="radio" name="rate" value="4" id="star4">
            <label class="fas fa-star" for="star4"></label>
          <input type="radio" name="rate" value="3" id="star3">
            <label class="fas fa-star" for="star3"></label>
          <input type="radio" name="rate" value="2" id="star2">
            <label class="fas fa-star" for="star2"></label>
          <input type="radio" name="rate" value="1" id="star1">
            <label class="fas fa-star" for="star1"></label>
          @show
        </div>
        <br />
        <label for="comentario">Comentario</label>
        <textarea class="form-control" name="comentario"  id="comentario"
          rows="2" style="overflow:auto;resize:none" required>@yield('comentario')</textarea>
        <br />
        <button type="submit" class="btn btn-primary"
          {{Auth::check()?'':'disabled'}}>@yield('boton', 'Votar')</button>
        </form>
      </div>
    </div>
  </div>
