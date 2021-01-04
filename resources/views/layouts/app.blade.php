<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://getbootstrap.com/docs/5.0/examples/album/"  rel="canonical" >
  <link href="../dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="{{ asset('dashboard/css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Movies</a>
      <form method="GET" action="/buscar">
      <input class="form-control form-control-dark w-100" type="text" name="titulo" placeholder="Autor Categoría Título">
      </form>
    </header>
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <form method="GET" action="/buscar">
                    <input type="text" id="inputCategoria" name="autor" class="form-control" placeholder=" Autor o Título" required autofocus>
                </form>
              </li>
              <li class="nav-item">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Acción y Aventura' ])}}">Acción y Aventura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Bélico' ])}}">Bélica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Biográfico' ])}}">Biografica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Comedia' ])}}">Comedia</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Ciencia ficción' ])}}">Ciencia Ficción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Documental' ])}}">Documental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Drama' ])}}">Drama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Histórico' ])}}">Hitórico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Terror o Horror' ])}}">Terror o Horror</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Infantil' ])}}">Infantil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Musical' ])}}">Musical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Suspenso' ])}}">Suspense</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('genero', ['categoria' => 'Western' ])}}">Wester</a>
                    </li>
                </ul>
                </li>
            </ul>
          </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <main class="py-4">
                    @yield('content')
                    @yield('scripts')
                </main>
            </div>
        </main>
      </div>
    </div>
    <script src="../dashboard/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../dashboard/js/dashboard.js"></script>
</body>
</html>