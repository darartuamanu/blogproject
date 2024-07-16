@extends('layouts.app')

@section('content')
    <!-- Banner Slider Section -->
    <div class="banner-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div id="slider_main" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slider_1.png" alt="#" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/slider_1.png" alt="#" />
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#slider_main" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="full slider_cont_section">
                        <h4>More Featured in</h4>
                        <h3>Jack Blogger</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        <div class="button_section">
                            <a href="about.html">Read More</a>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>About <span class="orange_color">Us</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/blog1.png" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                        <h4>The biggest and most awesome camera of year</h4>
                        <h5>MAY 14 2019 5 READ</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable.</p>
                    </div>
                </div>
            </div>

            <div class="row margin_top_30">
                <div class="col-md-6">
                    <img src="images/blog2.png" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                        <h4>What 3 years of android taught me the hard way</h4>
                        <h5>MAY 19 2019 5 READ</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable.</p>
                    </div>
                </div>
            </div>

            <!-- Blog Posts Section -->
            @foreach ($posts as $post)
                <div class="row margin_top_30">
                    <div class="col-md-6">
                        <img src="{{ asset('images/' . $post->image) }}" alt="#" />
                    </div>
                    <div class="col-md-6">
                        <div class="full blog_cont">
                            <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                            <h5>{{ $post->created_at->diffForHumans() }}</h5>
                            <p>{{ $post->description }}</p>
                            <hr>
                             <!-- Edit Button -->
                             <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-primary">Edit</a><br><br>
                            <!-- Delete Button -->
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="row margin_top_30">
                <div class="col-md-12">
                    <div class="button_section full center margin_top_30">
                        <a style="margin:0;" href="about.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Marketing Section -->
    <div class="section layout_padding dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Marketing</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/marketing_img.png" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                        <h3 class="white_font">Where can I get some</h3>
                        <h5 class="grey_font">March 19 2019 5 READ</h5>
                        <p class="white_font">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage of
                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                            of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                            as necessary, making this the first true generator on the Internet. It uses a dictionary
                            of over 200 Latin words, combined g to use a passage of Lorem Ipsum, you need to be sure
                            there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this
                            the first true generator..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comments Section -->
    <section class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                        <h4 style="border-bottom: solid #333 1px;">Comments / 2</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="full comment_blog_line">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="images/c_1.png" alt="#" />
                            </div>
                            <div class="col-md-9">
                                <div class="full contact_text">
                                    <h3>Veniam</h3>
                                    <h4>Posted on Jan 10 / 2017 at 06:53 am</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a class="reply_bt" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="full comment_blog_line">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="images/c_2.png" alt="#" />
                            </div>
                            <div class="col-md-9">
                                <div class="full contact_text">
                                    <h3>Jack</h3>
                                    <h4>Posted on Jan 10 / 2017 at 06:53 am</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a class="reply_bt" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin_top_30">
                <div class="col-md-12 margin_top_30">
                    <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                        <h4>Post : Your Comment</h4>
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
                                            <input type="text" name="name" placeholder="Name" required="#" />
                                            <input type="email" name="email" placeholder="Email" required="#" />
                                        </div>
                                        <div class="col-md-6">
                                            <textarea placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row margin_top_30">
                                        <div class="col-md-12">
                                            <div class="center">
                                                <button>Send</button>
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

    <!-- Blog Section -->
    <div class="section layout_padding blog_blue_bg light_silver">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="heading">
                        <h3>Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="full">
                        <div class="big_blog">
                            <img class="img-responsive" src="images/blog_1.png" alt="#" />
                        </div>
                        <div class="blog_cont_2">
                            <h3>Why do we use it</h3>
                            <p class="sublittle">March 19 2019 5 READ</p>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                it has a more-or-less normal distribution of letters as opposed to using Content
                                here content here making..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
