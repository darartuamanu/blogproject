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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Additional Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png" type="image/gif') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">


    <!-- Vite JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


<body data-bs-spy="scroll" data-bs-target="#navbar-example" tabindex="0">
    
    <!-- Navbar -->

    <body class="main-layout">
        <!-- loader  -->
       <!-- <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="" /></div>
        </div>-->
        <!-- end loader -->
        <!-- header -->
        <header>
            <!-- header inner -->
            <div class="container">
                <div class="titlebar">
                    <!--<a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">
                        <h2>Add New Post</h2>-->
                    </a>
                    <!--<h1 style="background-color: blue; color: white; font-size: 36px; padding: 10px;">Mini post list</h1>-->

                </div>

                <hr>
                <!-- Message if a post is posted successfully -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                {{--                
                @forelse ($posts as $post)
                    
               
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                        <img class="img-fluid"
                                            style="max-width:50%;float: left; margin-right: 20px; width: 200px; height: auto;">"
                                        src="{{ asset('images/' . $post->image) }}" alt="" >
                                    </div>
                                    <div class="col-10">
                                        <h4> <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                                    </div>
                                </div>
                                <p>{{ $post->description }}</p>
                                <hr>
                            </div>
                        </div>
                        @empty
                    
                        @endforelse --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo"> <a href="index.html"><img src="images/logo.png"
                                                alt="#"></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active">
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <!--<li>
                                                <a href="marketing.html">Marketing</a>
                                            </li>-->
                                            <li>
                                                <a href="/create">Add Post</a>
                                            </li>
                                            <!--<li>
                                                <a href="contact.html">Contact us</a>
                                            </li>-->
                                            <li>
                                                <a href="dashboard">Login</a>
                                            </li>
                                            <li>
                                                <a href="register">Register</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/search_icon.png"
                                                        alt="#" /></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->
        </header>
        
        @yield('content')
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="#"><img src="images/footer_logo.png" alt="#" /></a>
                        <ul class="contact_information">
                            <li><span><img src="images/location_icon.png" alt="#" /></span><span
                                    class="text_cont">addis<br>Ethiopia</span></li>
                            <li><span><img src="images/phone_icon.png" alt="#" /></span><span
                                    class="text_cont">987 654 3210<br>987 654 3210</span></li>
                            <li><span><img src="images/mail_icon.png" alt="#" /></span><span
                                    class="text_cont">darartuamanu6@gmail.com<br></span></li>
                        </ul>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer_links">
                            <h3>Quick link</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Features</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Markrting</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Testimonial</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_links">
                            <h3>Instagram</h3>
                            <ol>
                                <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                                <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                                <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                                <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_links">
                            <h3>Contact us</h3>
                            <form action="index.html">
                                <fieldset>
                                    <div class="field">
                                        <input type="text" name="name" placeholder="Your Name"
                                            required="" />
                                    </div>
                                    <div class="field">
                                        <input type="email" name="email" placeholder="Email" required="" />
                                    </div>
                                    <div class="field">
                                        <input type="text" name="subject" placeholder="Subject" required="" />
                                    </div>
                                    <div class="field">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <div class="field">
                                        <div class="center">
                                            <button class="reply_bt">Send</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="cpy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->
        <!-- Javascript files-->



        <header>
            <nav id="navbar-example" class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                   {{--   <!--<a class="navbar-brand" href="{{ route('posts.index') }}">Mini-Blog</a>-->--}}
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                              {{--    <!--<a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
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
            </li>-->--}}
                        </ul>
                    </div>
                </div>
            </nav>
            </head>
            
            <!-- Main Content -->
           <!-- <main class="container mt-4">-->
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
                

                 <!--<Footer>
  <footer class="footer mt-auto py-3 bg-dark">
      <div class="container d-lg-flex justify-content-between">
          <span class="text-light">Mini-Blog © 2023</span>
      </div>
  </footer>-->

                <!-- Scripts -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                </script>
                <script src="{{ asset('js/jquery.min.js') }}"></script>
                <script src="{{ asset('js/popper.min.js') }}"></script>
                <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
                <script src="{{ asset('js/plugin.js') }}"></script>
                <!-- Scrollbar Js Files -->
                <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
                <script src="js/custom.js"></script>
    </body>

</html>
