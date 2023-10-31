<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarrerBird</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-white text-center py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CarrerBird</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link text-white" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Curriculums</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    <h1 class="text-center">Bienvenido a carrer bird tu lugar para contratar y encontrar trabajo</h1>
        <hr>
    @yield('content')

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
          <div class="row">
            <div class="col">
              <p>&copy; 2023 CarrerBird</p>
            </div>
          </div>
        </div>
      </footer>

</body>
</html>
