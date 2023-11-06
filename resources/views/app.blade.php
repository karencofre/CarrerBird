<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarrerBird</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-white text-center py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('index')}}">CarrerBird</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('login.index')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('postulacion')}}">Register</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('perfil')}}">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('curr')}}">Curriculums</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>


      <div class="hero bg-primary text-white text-center mb-5">
      </div>
<h1 class="text-center my-5 text-black">CarrerBird</h1>

    @yield('content')


    <div class="container-fluid bg-dark">
        <section class="mt-5">
            <h2 class="text-center">Colaboradores</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="colaborador1.jpg" class="card-img-top" alt="Colaborador 1">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Colaborador 1</h5>
                            <p class="card-text">Descripción o rol del colaborador 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="colaborador2.jpg" class="card-img-top" alt="Colaborador 2">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Colaborador 2</h5>
                            <p class="card-text">Descripción o rol del colaborador 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="colaborador3.jpg" class="card-img-top" alt="Colaborador 3">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Colaborador 3</h5>
                            <p class="card-text">Descripción o rol del colaborador 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Redes Sociales</h5>
                    <div class="d-flex justify-content-center">
                        <a href="https://github.com/karencofre" class="text-light mx-2" target="_blank">GitHub</a>
                        <a href="https://www.linkedin.com/in/karen-cofre-cejas" class="text-light mx-2" target="_blank">LinkedIn</a>
                        <a href="https://www.instagram.com/neural_tutor" class="text-light mx-2" target="_blank">Instagram</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Contacto</h5>
                    <p>
                        <strong>Teléfono:</strong> +123 456 789<br>
                        <strong>Correo:</strong> ejemplo@example.com
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Navegacion</h5>
                    <nav class="nav justify-content-center">
                        <a class="nav-link text-light" href="{{route('index')}}">Inicio</a>
                        <a class="nav-link text-light" href="{{route('perfil')}}">Perfil</a>
                    </nav>
                </div>
            </div>
        </div>

      </footer>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
