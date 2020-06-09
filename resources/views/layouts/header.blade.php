
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="/bootstrap.min.css">
     <script type="text/javascript" src="/js/bootstrap.min.js"></script>
     <style type="text/css">
    
      nav{
        position: fixed;
      
      }
      .logo{
            width: 130px;
            height: 110px; 
            position: absolute;
            margin-top: -45px;

          }
        .cp{
          cursor: pointer;
        }
        .backTop{
          cursor: pointer;
        }
     </style>

    <title>@yield('title')</title>
  </head>
  <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info nv pt-2 pb-2">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li>
                <a class="navbar-brand" href="{{ URL('/') }}"><img src="/img/wepop.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <li class="nav-item active ml-5"></li>
              </li>
              <li class="nav-item active ml-5"></li>
              </li>
              <li class="nav-item active ml-5">
                <a class="nav-link" href="{{ URL('index') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Berita</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Quiz</a>
                  <a class="dropdown-item" href="#">Belajar Bahasa</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Forum</a>
                </div>
              </li>
              
                  
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
      </nav>

      @yield('slide')
    
      @yield('container')

      <center>
      <div class="backTop"><img src="img/up.png" width="70"></div>
      </center>
      <br>
            <footer class="bg-info pt-5 pb-5 mr-auto pr-4">
            <div class="row">
              <div class="col text-center">
                <h6>&copy;Copyright 2019</h6>
              </div>
            </div>
            <div class="row">
              <div class="col text-center">
                <h4>Know Your Life || Know Your Hobby</h4>
                <h5>Powered By </h5>
                <img src="/img/bridges.png" width="200px">
              </div>
            </div>
          </footer>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript">
		    var $backToTop = $(".backTop");
		    $backToTop.hide();
		    $(window).on('scroll', function() {
		      if ($(this).scrollTop() > 100) {
		        $backToTop.fadeIn();
		      } else {
		        $backToTop.fadeOut();
		      }
		    });

		    $backToTop.on('click', function(e) {
		      $("html, body").animate({scrollTop: 0}, 500);
		    });
		</script>

  </body>
</html>