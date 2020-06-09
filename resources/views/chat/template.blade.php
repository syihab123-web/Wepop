<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom fonts for this theme -->
  <link href="/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mb-5" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="{{ URL('/index') }}">WePop</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ URL('/home') }}">Action</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ URL('/index#portfolio') }}">Features</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ URL('/index#about') }}">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ URL('/index#contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<br><br>
@yield('container')

<!-- Footer -->
<footer class="footer text-center bg-info">
  <div class="container">
    <div class="row">

      <!-- Footer Location -->
      
      </div>
      <div class="row">
        <div class="col text-center">
          <h4>Know Your Life || Know Your Hobby</h4>
          <h5>Powered By </h5>
          <img src="/img/bridges.png" width="200px">
        </div>
              <!-- Footer Social Icons -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-facebook-f"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-twitter"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-linkedin-in"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-dribbble"></i>
        </a>
      </div>

      <!-- Footer About Text -->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">About Bridge</h4>
        <p class="lead mb-0">Bridge is a Software Corporation, located in SMKN 4 Bandung. 
          <a href="http://www.smkn4bdg.sch.id">http://www.smkn4bdg.sch.id</a>.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
  <div class="container">
    <small>Copyright &copy; Wepop 2019</small>
  </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>


 <!-- Bootstrap core JavaScript -->
 <script src="/js/jquery.min.js"></script>
 <script src="/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="/js/jquery.easing.min.js"></script>

 <!-- Contact Form JavaScript -->
 <script src="/js/jqBootstrapValidation.js"></script>
 <script src="/js/contact_me.js"></script>

 <!-- Custom scripts for this template -->
 <script src="/js/freelancer.min.js"></script>
 <script src="https://kit.fontawesome.com/e7d4fd938f.js" crossorigin="anonymous"></script>
</body>

</html>
