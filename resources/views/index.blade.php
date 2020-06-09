<style type="text/css">
        .logo1{
            width: 600px;
          height: 600px;
        }  

          section{
            min-height: 420px;
          }
          #content{
            padding-top: 20px;
          }
          #content img{
            width: 100%;
            height: 290px;
          }
        
          .carousel-inner img {
              width: 100%;
              height: 100%;
          }
</style>

@extends('layouts.header')

@section('title', 'Wepop')

@section('slide')
      <div id="demo" class="carousel slide col-md-14" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- Ganti gambar dengan file gambar kalian -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/death.jpg" width="400" height="400">
          </div>
          <div class="carousel-item">
            <img src="img/naruto.jpg" width="400" height="400">
          </div>
          <div class="carousel-item">
            <img src="img/musashi.png" width="400" height="400">
          </div>
        </div>
        
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

@endsection

@section('container')
  <div class="container mt-5">
    <div class="row">
      <div class="col">
          <section class="about" id="about">
          <div class="container">
            <div class="row text-center mb-5">
              <div class="col">
                <br><br><br>
                <h1>About</h1>
              </div>
            </div>
            <div class="row text-justify">
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lorem
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lorem</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lorem</p>
              </div>
            </div>
          </div>
          </section>
          <br><br><br><br>
          <br><br><br><br>
          <section class="content bg-light mb-5 pb-5" id="content">
          <div class="container">
            <div class="row text-center">
              <div class="col">
                <h1>What's on We Pop</h1>
              </div>
            </div>
            <br>
            <div class="row mb-4">
              <div class="col-md">
                <div class="card">
                      <img src="/img/pkk.png" width="20%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Forum chat</h5>
                        <p class="card-text">Temukan teman se Hobby dan ajak mereka berkomunikasi di Wepop Forum !</p>
                        <a href="cobain.html" class="btn btn-primary">Go to content</a>
                      </div>
                  </div>
                </div>
                <div class="col-md">
                <div class="card">
                      <img src="/img/konsonan.jpg" width="" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Belajar Bahasa</h5>
                        <p class="card-text">Belajar bahasa jepang dan korea yang baik dan benar !</p>
                        <a href="#" class="btn btn-primary">Go to content</a>
                      </div>
                  </div>
                </div>
                <div class="col-md">
                <div class="card">
                      <img src="/img/news.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">News</h5>
                        <p class="card-text">Temukan berita up to date tentang dunia KPOP dan Anime !</p>
                        <a href="#" class="btn btn-primary">Go to content</a>
                      </div>
                  </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md">
                <div class="card">
                      <img src="/img/jdk.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Quizzz</h5>
                        <p class="card-text">Tes pengetahuan mu dan dapatkan poin untuk Hadiah yang menarik !</p>
                        <a href="quiz.html" class="btn btn-primary">Go to content</a>
                      </div>
                  </div>
                </div>
                 <div class="col-md">
                <div class="card">
                      <img src="/img/merch.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Merchandise</h5>
                        <p class="card-text">Kumpulkan poin mu untuk Hadiah yang menarik !</p>
                        <a href="#" class="btn btn-primary">Go to content</a>
                      </div>
                  </div>
                </div>
                <div class="col-md">
                <div class="card">
                      <img src="/img/wallpafest.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Wallpafest</h5>
                        <p class="card-text">Temukan Wallpaper dengan kualitas memukau !</p>
                        <a href="Wallpafest/index.php" class="btn btn-primary">Go to content</a>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          </section>
          <br><br><br>

      </div>
    </div>
 </div>
@endsection