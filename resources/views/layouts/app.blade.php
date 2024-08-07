<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">


    <!-- Vite JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


<body data-bs-spy="scroll" data-bs-target="#navbar-example" tabindex="0">

    <!-- Navbar -->

    <body class="main-layout">

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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo"> <a href="index.html"><img src="{{ asset('images/logo.png') }}"
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
                                                <a href="home">Home</a>
                                            </li>

                                            @if (Auth::check())
                                                <li>
                                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                                </li>
                                                <!-- Logout link visible only to authenticated users -->
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @else
                                                <!-- Login and Register links visible only to guests -->
                                                <li>
                                                    <a href="{{ route('login') }}">Login</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('register') }}">Register</a>
                                                </li>
                                            @endif

                                            <li class="search-icon">
                                                <a href="#" onclick="toggleSearchForm(event)">
                                                    <img src="{{ asset('images/search_icon.png') }}"
                                                        alt="Search Icon" />
                                                </a>
                                            </li>
                                            <form action="{{ route('search.results') }}" method="GET" class="d-flex">
                                                @csrf
                                                <input type="text" name="query" class="form-control me-2"
                                                    placeholder="Search..." value="{{ old('query') }}">
                                                <button type="submit" class="btn btn-outline-success">Search</button>
                                            </form>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->
        </header>

        @yield('content')<br><br>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="#"><img src="{{ asset('images/logo.png') }}" alt="#" /></a>
                        <ul class="contact_information">
                            <li><span><img src="{{ asset('images/location_icon.png') }}" alt="#" /></span>
                                class="text_cont">addis<br>Ethiopia</span></li>
                            <li><span><img src="{{ asset('images/phone_icon.png') }}" alt="#" /></span><span
                                    class="text_cont">09 11 12 13 14<br>09 00 00 00 00</span></li>
                            <li><span><img src="{{ asset('images/mail_icon.png') }}" alt="#" /></span><span
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
                                <li><img class="img-responsive" src="{{ asset('images/footer_blog.png') }}"
                                        alt="#" /></li>
                                <li><img class="img-responsive" src="{{ asset('images/footer_blog.png') }}"
                                        alt="#" /></li>
                                <li><img class="img-responsive" src="{{ asset('images/footer_blog.png') }}"
                                        alt="#" /></li>
                                <li><img class="img-responsive" src="{{ asset('images/footer_blog.png') }}"
                                        alt="#" /></li>

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#search").autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            url: "{{ route('search') }}",
                            type: 'GET',
                            data: {
                                query: request.term
                            },
                            success: function(data) {
                                response($.map(data, function(item) {
                                    // Modify this to include description in the label if desired
                                    return {
                                        label: item.title + ' - ' + item
                                            .description,
                                        value: item.title + '-' + item.description,
                                    };
                                }));
                            }
                        });
                    },
                    minLength: 4
                });
            });
        </script>


    </body>

</html>
