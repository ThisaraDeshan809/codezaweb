<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome Codeza</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="icon">
   <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
   <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">


   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


   <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>


  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <a href="index.html" class="logo me-auto"><img src="assets/img/logo-01.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li><a class="focus" href="#">Projects</a></li>
          <li><a class="focus" href="#">POS Systems</a></li>
          <li><a class="focus" href="{{route('Home.AboutUs')}}">About</a></li>
          <li><a class="focus" href="{{route('Home.ContactUs')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="#" class="get-started-btn">Get Started</a>

    </div>
  </header>

  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Transform Your Online Presence<br>Codeza</h1>
      <h2>Welcome to Codeza, where we blend creativity and technology to deliver cutting-edge software and web design services. Harness the power of innovation to elevate your digital presence and exceed your business goals. Discover limitless possibilities with Codeza today.</h2>
      <a href="#" class="btn-get-started">Read More</a>
    </div>
  </section>
  <main id="main">
    @yield('content')
  </main>



  <footer id="footer" style="background-color: black;">

    <div class="footer-top" style="background-color: black; color: white;">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" style="color: white;">
            <h3 style="color: white;">Codeza</h3>
            <p style="color: white;">
              Colombo 07, <br>
              Colombo<br>
              <strong>Phone:</strong> +94 71 3075971<br>
              <strong>Email:</strong> codeza@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color: white;">Useful Links</h4>
            <ul style="color: white;">
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" style="color: white;">
            <h4 style="color: white;">Our Services</h4>
            <ul style="color: white;">
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 style="color: white;">Join Our Newsletter</h4>
            <p style="color: white;">"Stay updated with the latest trends. Join our newsletter for exclusive insights."</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Email" style="color: black; border-color: transparent; box-sizing: border-box;"><input type="submit" value="Subscribe" style="background-color: rgb(255, 123, 0);">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright" style="color: rgb(247, 174, 122);">
          &copy; Copyright 2023 <strong><span>Codeza</span></strong>. All Rights Reserved
        </div>
        <div class="credits" style="color: rgb(247, 174, 122);" >

          Designed by &copy;<a href="#">Codeza</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
