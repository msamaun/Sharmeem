<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="remus,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="Dreambuzz">

    <title>Rubi- Creative portfolio Html Template</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images')}}/favicon.html" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/bootstrap/css/bootstrap.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/animate-css/animates.css">
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/themify/css/themify-icons.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/animated-text/animated-text.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css')}}/style.css">

</head>

<body>



@include('component.nav_bar')

<!-- Header Close -->



<!-- Slider Start -->
@include('component.header')

@include('pages.aboutMe')

@yield('content')

@include('pages.services')

@include('pages.workPortfolio')

<!-- portfolio -->
@yield('portfolio')
<!-- /portfolio -->
@yield('skills')

<section class="counter-wrap section-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-user"></i>
                    <span class="counter">785</span>
                    <h5>Happy Clients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-thumb-up"></i>
                    <span class="counter">385</span>
                    <h5>project done</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-face-smile"></i>
                    <span class="counter">845</span>
                    <h5>Cup of tea</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <i class="ti-cup"></i>
                    <span class="counter">225</span>
                    <h5>awards won</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@include('pages.team')
<section class="cta">
    <div class="container">
        <div class="cta-wrap box-shadow">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="cta-content">
                        <span class="text-color">All in one Solution</span>
                        <h2 class="text-lg">Have any Project on mind?</h2>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="text-lg-right mt-5 mt-lg-0">
                        <a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Contact me<i class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4 text-lg">News Feed</h2>
                    <p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="blog-item mb-5 mb-lg-0">
                    <img src="{{asset('assets/images')}}/blog1.jpg" alt="" class="img-fluid">
                    <div class="content mt-4">
                        <span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
                        <h4 class="mb-3 mt-2"><a href="blog-single.html">How To Build Honest UIs And Help Users Make Better </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti, suscipit minima debitis.</p>

                        <a href="blog-single.html" class="read-more">Read More <i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item mb-5 mb-lg-0">
                    <img src="{{asset('assets/images')}}/blog2.jpg" alt="" class="img-fluid">
                    <div class="content mt-4">
                        <span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
                        <h4 class="mb-3"><a href="blog-single.html">Dating Apps: How To Improve Your Designs </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti, suscipit minima debitis.</p>

                        <a href="blog-single.html" class="read-more">Read More <i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item mb-5 mb-lg-0">
                    <img src="{{asset('assets/images')}}/blog3.jpg" alt="" class="img-fluid">
                    <div class="content mt-4">
                        <span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
                        <h4 class="mb-3"><a href="blog-single.html">Meet Inclusive Front-End Design Patterns A New</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti, suscipit minima debitis.</p>

                        <a href="blog-single.html" class="read-more">Read More <i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="section" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="title">
                    <h2 class="mb-5 text-lg">Clients says</h2>
                    <p class="mb-5 ">Reiciendis, reprehenderit, quas impedit ea repudiandae non quibusdam nulla pariatur rerum numquam ipsum corporis, dignissimos aliquid, neque. Recusandae voluptas, inventore error amet.</p>
                    <a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Get start<i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="main-slider ">
                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Code Quality!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Khalid Farhan</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('assets/images')}}/test-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Design!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Md.tanvir</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('assets/images')}}/test-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Development!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Rayhan Masud</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('assets/images')}}/test-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Development!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Jabed Hossain</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('assets/images')}}/test-4.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4 text-lg">Let's Get started</h2>
                    <p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="contact__form form-row contact-form" method="post" action="#" id="contactForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Your Subject</label>
                                <input type="text" name="subject" id="subject"  class="form-control" placeholder="Enter Your Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea id="message" name="message" cols="30" rows="8" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="d-lg-flex justify-content-between mt-4">
                            <p>* Rest assured.We will not spam at your inbox.</p>
                            <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('component.footer')



<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="{{asset('assets/plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4.3.1 -->
<script src="{{asset('assets/plugins')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('assets/plugins')}}/slick-carousel/slick/slick.min.js"></script>
<!-- Progress Bar -->
<script src="{{asset('assets/plugins')}}/counto/apear.js"></script>
<script src="{{asset('assets/plugins')}}/counto/counTo.js"></script>
<script src="{{asset('assets/plugins')}}/animated-text/animated-text.js"></script>

<script src="{{asset('assets/plugins')}}/counterup/waypoint.js"></script>
<script src="{{asset('assets/plugins')}}/counterup/jquery.counterup.min.js"></script>
<!--  Magnific Popup-->
<script src="{{asset('assets/plugins')}}/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/plugins')}}/shuffle/shuffle.min.js"></script>

<script src="{{asset('assets/plugins')}}/jquery/ajax-contact.js"></script>
<script src="{{asset('assets/js')}}/script.js"></script>

</body>


</html>

