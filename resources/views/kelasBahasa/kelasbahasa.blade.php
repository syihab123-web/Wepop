@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
  <section class="jumbotron" id="jumbotron">
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead">Selamat datang di Kelas Bahasa, Official JDK Indonesia. Apa yang ingin kamu pelajari hari ini?</p>
        <a href="{{ URL('jepang') }}"><img src="/img/japan.jpg" width="300" height="200" style="padding: 20px;"></a>
        <a href="{{ URL('korean') }}"><img src="/img/korean.jpg" width="300" height="200" style="padding: 20px;"></a>
      </div>
    </div>
    </section>
  
@endsection
    

