@section('header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">MonteValuo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('marcas.index') }} ">Laptops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">All in one</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tabletas</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catalogos
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('marcas.index') }}">Marcas</a>
            <a class="dropdown-item" href="{{ route('pro.index') }}">Procesador</a>
            <a class="dropdown-item" href="{{ route('almacen.index') }}">Almacenaje</a>
            <a class="dropdown-item" href="{{ route('ram.index') }}">Memorias Ram</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

@endsection