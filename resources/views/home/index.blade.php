<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cafe Dreamy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<!--
header-img start 
============================== -->
<section id="hero-area">
    <img class="img-responsive" src="images/header.jpg" alt="">
</section>
<!--
Header start 
============================== -->
<nav id="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">
                                    <img src="images/logo.png" alt="Logo">
                                </a>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('dashboard') }}">Home</a></li>
                                    <li><a href="{{ url('menu') }}">Menu</a></li>
                                    <li><a href="{{ url('order') }}">Order</a></li>
                                    <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                                    <li><a href="{{ url('reservation') }}">Reservation</a></li>
                                    <li><a href="{{ url('profile') }}">Profile</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link">Log Out</button>
                                        </form>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</nav><!-- header close -->

<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="title">
                        <h3>Featured <span>Works</span></h3>
                    </div>
                    <div id="owl-example" class="owl-carousel">
                        <div><img class="img-responsive" src="images/slider/slider-img-1.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-2.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-3.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-4.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-1.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-2.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-3.jpg" alt=""></div>
                        <div><img class="img-responsive" src="images/slider/slider-img-4.jpg" alt=""></div>
                    </div>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- slider close -->

<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="images/cooker-img.png" alt="cooker-img">
                    <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">Cafe <span>Dreamy</span></h1>
                    <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Cafe Dreamy adalah kafe yang terkenal di pusat kota dengan suasana yang menyenangkan dan unik. Mereka menawarkan kopi spesialitas berkualitas tinggi dan karya seni lokal yang dipajang di dinding. Menu mereka meliputi berbagai jenis kopi seperti flat white dan macchiato, disajikan dengan detail oleh barista berpengalaman. Kafe ini cocok untuk bekerja atau bersantai, dengan pilihan makanan ringan seperti roti bakar artisanal dan kue homemade. Dengan pelayanan ramah dan interior yang Instagramable, Cafe Dreamy menjadi destinasi populer bagi pecinta kopi dan seni di kota tersebut.</p>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- #about-us close -->

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                    <ul>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="blog-img">
                                <img src="{{ url('images/blog/blog-img-1.jpg') }}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fashion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="blog-img">
                                <img src="{{ url('images/blog/blog-img-2.jpg') }}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Lemon-Rosemary Prawn Salad</h3>
                                <p>Prepared in true New England fashion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                            <div class="blog-img">
                                <img src="{{ url('images/blog/blog-img-3.jpg') }}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Summertime Tomato Salad with Grilled Corn</h3>
                                <p>Prepared in true New England fashion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- #blog close -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telefone</h4>
                                  <p>(000) 123 456 78- (000) 123 4567 89</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>2046 Blue Spruce Lane Laurel Canada</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>rest@gmail.com - rest@mail.ru</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>LATEST <span>BLOG POSTS</span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="#">Nov 9-2014</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien</p>
                                </li>
                                <li>
                                    <h4><a href="#">Sep 8-2014</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="images/photo/photo-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/photo/photo-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/photo/photo-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/photo/photo-4.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By <a href="http://www.themefisher.com">Themefisher</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html> 