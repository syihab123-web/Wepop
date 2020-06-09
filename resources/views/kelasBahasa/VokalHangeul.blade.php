@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Vokal Hangeul/모음 [mo-eum]</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
  
  <p></p>
  <p></p>
  <center>
            <div class="materi">Dalam Bahasa Korea, huruf vokal disebut 모음 [mo-eum] dan terdiri dari 10 bentuk.
            <p><img class="tabel" src="/img/tabel-vokal-hangul.png"></p>
            <p>Contoh pengucapan bunyi vokal hangeul</p>
            <audio src="/audio/Vokal.mp3" controls></audio>
          </div>
          </center>
          <div btn-pilihan>
            <a href="{{ URL('Hangeul') }}">PREVIOUS</a>
            <a class="next" href="{{ URL('VokalRangkap') }}" style="float: right;">NEXT</a>
          </div>
          
      </div>
    </div>
  </div>        
  </section>

@endsection
