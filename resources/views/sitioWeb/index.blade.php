<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAROONS</title>
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('sitioWeb/img/Ico.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="header" id="inicio">
        <div class="header-section-logo">
            <img src="{{asset('sitioWeb/img/Logo.webp')}}" alt="">
        </div>
        <nav class="header-section-navegacion">
          <button class="cerrar"><i class="fa-solid fa-xmark"></i></button>
            <ul class="header-list">
                <li class="li-1"><a class="header-hambu-1" href="#inicio">Inicio</a></li>
                <li class="li-2"><a class="header-hambu-2" href="#mis-vis">Misión y Visión</a></li>
                <li class="li-3"><a class="header-hambu-3" href="#servicios">Servicios</a></li>
                <li class="li-4"><a class="header-hambu-4" href="#contactos">Contactos</a></li>
            </ul>
          </nav>
        <button class="abrir"><i class="fa-solid fa-bars"></i></button>
    </header>

    <main>
      <section id="mis-vis">
      <section class="main-section-mision">
            <article class="main-mision">
                <h3>Misión</h3>
                @foreach($getInicio as $getInicios)
                <p>{{$getInicios->mision}}</p>
                @endforeach
            </article>      
            <article class="main-imgM">
                <img src="https://placehold.co/200" alt="">
            </article>
        </section>

        <section class="main-section-vision">
            <article class="main-imgV">
                    <img src="https://placehold.co/200" alt="">
            </article> 
            <article class="main-vision">    
                <h3>Visión</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, velit odit? Itaque, ut ratione distinctio eaque autem voluptatum in mollitia explicabo sequi labore neque reprehenderit delectus? Obcaecati, aut natus! Ipsa. 
                </p>     
            </article> 
        </section >
        <section>
      </section>
          <hr class="linea">
        </section>
        <section id="servicios" class="main-carrusel">
            <h3>SERVICIOS</h3>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('sitioWeb/img/carrusel_img1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nombre servicio</h5>
                      <p>Descripción servicio empresa.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('sitioWeb/img/carrusel_img1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nombre servicio</h5>
                      <p>Descripción servicio empresa.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('sitioWeb/img/carrusel_img1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nombre servicio</h5>
                      <p>Descripción servicio empresa.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>      
        <hr class="linea">
        <section class="main-info-empresa">
          <section class="main-info-1">
            <article>
              <h3>Título</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ex voluptates dolorem. Amet laborum dolorem placeat voluptates numquam architecto eveniet facere deserunt magnam perspiciatis, quasi commodi repudiandae neque harum cupiditate!</p>
            </article>
            <div><img src="https://placehold.co/500" alt=""></div>
          </section>
          <section class="main-info-2">
            <div><img src="https://placehold.co/500" alt=""></div>
            <article>
              <h3>Título</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ex voluptates dolorem. Amet laborum dolorem placeat voluptates numquam architecto eveniet facere deserunt magnam perspiciatis, quasi commodi repudiandae neque harum cupiditate!</p>
            </article>
          </section>
        </section>
    </main>

    <footer id="contactos">
      <section class="footer-section1-2">
        <section class="footer-section1-contactos">
          <h3>Contactos</h3>
          <ul>
              <li><a target="_blank" href="https://workspace.google.com/intl/es/gmail/"><i class="fa-solid fa-envelope"></i> Gmail</a></li>
              <li><a target="_blank" href="https://maps.app.goo.gl/H91A9z2b35QjBv1D7"><i class="fa-solid fa-location-dot"></i> Google Maps</a></li>
              <li><a target="_blank" href=""><i class="fa-solid fa-phone"></i> 0993480186</a></li>
          </ul>
        </section>
        <section class="footer-section2-redes">
            <h3>Redes Sociales</h3>
            <ul>
                
                <li><a target="_blank" href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i> Instagram</a></li>             
                   
            </ul>  
        </section>
      </section>
      <section class="footer-section3-direccion">
            <ul>
                <h3>Geolocalización</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.252110135792!2d-78.46052002265307!3d-0.09332634066060236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d58f1506f70035%3A0x844ab3eda6b427db!2sCarapungo%2C%20Quito!5e0!3m2!1ses!2sec!4v1734363906174!5m2!1ses!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
        </section>
        <section class="footer-boton-inicio">
          <a href="#inicio"><button type="button" class="btn btn-light"><i class="fa-solid fa-arrow-up"></i></button></a>
      </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{asset('sitioWeb/js/script.js')}}"></script>
</body>
</html>