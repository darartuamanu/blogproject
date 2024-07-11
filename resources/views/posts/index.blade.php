@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button"><h2>Add New Post</h2></a>
    <h1 style="background-color: blue; color: white; font-size: 36px; padding: 10px;">Mini post list</h1>

  </div>
    
  <hr>
  <!-- Message if a post is posted successfully -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
         @if (count($posts) > 0)
    @foreach ($posts as $post)
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2">
              <img class="img-fluid" style="max-width:50%;float: left; margin-right: 20px; width: 200px; height: auto;">" src="{{ asset('images/'.$post->image)}}" alt="">
            </div>
            <div class="col-10">
              <h4> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
            </div>
          </div>
          <p>{{$post->description}}</p>
          <hr>
        </div>
      </div>-->

 <!-- Delete Button -->
 <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')"n title="this will delete">Delete</button>
</form>
{{-- 
      <div>
      <img src="{{ asset('images/'. $post->image) }}" alt="Image Description">
</div> --}}

    @endforeach
  @else
    <p>no description
    </p>
  @endif
</div>
@endsection


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
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
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
        <!-- <div class="loader"><img src="{{ asset('images/'.$post->image)}} alt=" /></div>-->
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                       <!-- <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>-->
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active">
                                 <h2> Home page</h2>
                              </li>
                              
                               <!--  <a href="about.html">About</a>
                              </li>
                              <li>
                                 <a href="marketing.html">Marketing</a>
                              </li>
                              <li>
                                 <a href="blog.html">Blog</a>
                              </li>
                              <li>
                                 <a href="contact.html">Contact us</a>
                              </li>
                              <li>
                                 <a href="#">Login</a>
                              </li>
                              <li>
                                 <a href="#">Register</a>
                              </li>
                              <li>
                                 <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>-->
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <!-- revolution slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <!--<div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="images/slider_1.png" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="{{ asset('images/'.$post->image)}} />
                        </div>
                     </div>-->
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev href="slider_main data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h3></h3>
                     <h4> </h4>
                     <p></p>
                     <div class="button_section">
                        <a href="about.html">Read More</a>
                        <a href="contact.html">Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>blog project <span class="orange_color"></span></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                 <!-- <img src="{{ asset('images/'.$post->image)}}" alt="#" />-->
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4></h4>
                     <h5></h5>
                     <p ></p>
                  </div>
               </div>
            </div>
            @foreach ($posts as $post)
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-2">
                    <img class="img-fluid" style="max-width:25%;" src="{{ asset('images/'.$post->image)}}" alt="">
                  </div>
                  <div class="col-10">
                    <h4> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                  </div>
                </div>
                <p>{{$post->description}}</p>
                <hr>
              </div>
            </div>
      
       <!-- Delete Button -->
       <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')"n title="this will delete">Delete</button>
      </form>
      {{-- 
            <div>
            <img src="{{ asset('images/'. $post->image) }}" alt="Image Description">
      </div> --}}
      
          @endforeach
        {{-- @else
          <p>no description
          </p>
        @endif --}}
            
            {{-- <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.html">Read More</a>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
      <!-- end section -->
      <!-- section --> 
      <div class="section layout_padding dark_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <!--<img src="images/marketing_img.png" alt="#" />-->
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font"></h3>
                     <h5 class="grey_font"></h5>
                     <p class="white_font"> </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                    <!--<h4 style="border-bottom: solid #333 1px;"></h4>-->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <!--<img src="images/c_1.png" alt="#" />-->
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3></h3>
                             <!-- <h4></h4>-->
                              <p>
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#"></a>
                        </div>
                     </div>
                  </div>
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                          <!-- <img src="images/c_2.png" alt="#" />-->
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <!--<h3></h3>
                              <h4></h4>
                              <p>
                              </p>
                           </div>
                        </div>-->
                        <div class="col-md-2">
                           <a class="reply_bt" href="#"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                    <!-- <h4></h4>-->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.html">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                   <!-- <input type="text" name="name" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comment"></textarea>
                                 </div>
                              </div>-->
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                      <!-- <button>Send</button>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section --> 
     <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="heading">
                     <!--<h3>Blog</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="images/blog_1.png" alt="#" />
                     </div>
                     <div class="blog_cont_2">-->
                       <!-- <h3>Why do we use it</h3>
                        <p class="sublittle">March 19 2019  5 READ</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using Content here content here making..</p>
                     </div>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- footer -->
     <footer>
        <!-- <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="images/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">-->
                     <!--<li><span><img src="images/location_icon.png" alt="#" /></span><span class="text_cont">London 145<br>United Kingdom</span></li>
                     <li><span><img src="images/phone_icon.png" alt="#" /></span><span class="text_cont">987 654 3210<br>987 654 3210</span></li>
                     <li><span><img src="images/mail_icon.png" alt="#" /></span><span class="text_cont">demo@gmail.com<br>support@gmail.com</span></li>
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
                    <!- <h3>Quick link</h3>
                     <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">-->
                    <!-- <h3>Instagram</h3>
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
                              <input type="text" name="name" placeholder="Your Name" required="" />
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
                        </fieldset>-->
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
                  <p>Copyright © 2019 Design by <a href="https://html.design/"> ......</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>