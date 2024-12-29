<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('sitioWeb/img/Ico.ico')}}" type="image/x-icon">
    <link href="{{asset('sitioWeb/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('PanelControl/dashboard.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Panel de Control</title>
</head>
<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">MAROONS</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/Logo">
                <span data-feather="shopping-cart"></span>
                Logo
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/MisVis">
                <span data-feather="users"></span>
                Misión y Visión
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Carrusel">
                <span data-feather="bar-chart-2"></span>
                Carrusel
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/SobreNos">
                <span data-feather="layers"></span>
                Sobre Nosotros
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Contactos">
                <span data-feather="layers"></span>
                Contactos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Redes">
                <span data-feather="layers"></span>
                Redes Sociales
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Geolos">
                <span data-feather="layers"></span>
                Geolocalización
              </a>
            </li>
          </ul>

        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
        @yield('content')
       
      </main>
    </div>
  </div>
       
</body>
</html>