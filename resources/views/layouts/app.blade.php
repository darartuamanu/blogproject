<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> Blog</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Additional Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
      <!-- fevicon -->
 <link rel="icon" href="{{ asset('images/fevicon.png" type="image/gif')}}">
      <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">


  <!-- Vite JS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example" tabindex="0">
{{-- @yield('css') --}}
  <!-- Navbar -->

  <header>
    <nav id="navbar-example" class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <!--<a class="navbar-brand" href="{{ route('posts.index') }}">Mini-Blog</a>-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
             <!--<a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>-->
           <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Category 1</a></li>
                <li><a class="dropdown-item" href="#">Category 2</a></li>
                <li><a class="dropdown-item" href="#">Category 3</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>
  </head>
  <!-- Main Content -->
  <main class="container mt-4">
    <!-- Carousel -->
    <!--<div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button><br>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>-->
     <!-- <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
      </div>-->
      <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">-->
        <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--<span class="visually-hidden">Previous</span>-->
      <!--</button>-->
      <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">-->
       <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>-->
      <!--</button>-->
    </div>

    <!-- Content Section -->
    @yield('content')

    <!-- Tooltip Example -->
    <main class="container mt-5">
      
  
      <!-- Line Separator -->
      <hr class="my-5">
  
      <!-- Modal Button -->
      
                  </div>
              </div>
          </div>
      </div>
  </main>
  
  <!-- Footer 
  <footer class="footer mt-auto py-3 bg-dark">
      <div class="container d-lg-flex justify-content-between">
          <span class="text-light">Mini-Blog © 2023</span>
      </div>
  </footer>-->
  
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
  <script src="{{asset('js/plugin.js')}}"></script>
  <!-- Scrollbar Js Files -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
  <!-- Initialize Tooltips -->
 <!-- <script>
      document.addEventListener('DOMContentLoaded', function() {
          var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
          var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl)
          });
  
          // Example of a simple SweetAlert2 alert
          Swal.fire({
              title: 'Welcome!',
              text: 'Welcome to the Mini-Blog!',
              icon: 'success',
              confirmButtonText: 'Cool'
          });
      });-->