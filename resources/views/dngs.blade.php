<!DOCTYPE html>
<html lang="en">
<head>
  <title>GS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>
<!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: 001-1234-88888</span></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Email: <span class="__cf_email__" data-cfemail="c4adaaa2abeaa7aba8aba8ada684a3a9a5ada8eaa7aba9">[email&#160;protected]</span></span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Login -->
                            <a href="#"><i class="fa fa-lock" aria-hidden="true"></i> <span>Login / Register</span></a>
                            <!-- Language -->
                            <div class="dropdown">
                                <a class="btn pr-0 dropdown-toggle" href="#" role="button" id="langdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/core-img/eng.png" alt=""> English</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langdropdown">
                                    <a class="dropdown-item" href="#">- Latvian</a>
                                    <a class="dropdown-item" href="#">- Hindi</a>
                                    <a class="dropdown-item" href="#">- Bangla</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="hamiNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="./hosting.html">Hosting</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">- Home</a></li>
                                            <li><a href="./hosting.html">- Hosting</a></li>
                                            <li><a href="./about.html">- About</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Blog Details</a></li>
                                            <li><a href="./404.html">- 404</a></li>
                                            <li><a href="./coming-soon.html">- Coming Soon</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                                <!-- Live Chat -->
                                <div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="#" class="btn hami-btn live--chat--btn"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

   <div class="container my-4">

    <p class="font-weight-bold">To set or to stop autoplay in Bootstrap carousel you can use data attributes or JavaScript code.</p>

    <p><strong>Detailed documentation and more examples of Bootstrap grid you can find in our <a href="https://mdbootstrap.com/docs/jquery/javascript/carousel/"
          target="_blank">Bootstrap Carousel Docs</a>.</p>

    <p><strong class="font-weigt-bold">Note: </strong>Autoplay for the carousel is turned on from default.</p>

    <hr class="my-4">

    <h2 class="my-5 h2">Basic carousel - autoplay turned on from default</h2>

    <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel" data-interval="4000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <h2 class="my-5 h2">Autoplay turned off</h2>

    <p>To turn off the autoplay set <code>data-interval="false"</code> to the carousel element.</p>

    <div id="carouselExample2" class="carousel slide z-depth-1-half" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
 
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Phần đáy trang</p>
</div>
 
</body>
</html>