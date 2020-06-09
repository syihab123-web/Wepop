@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Konichiwa!</h1>
      <p class="lead">Selamat datang di Kelas Bahasa Jepang!</p>
       <center><img class="japan" src="/img/japan.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi"><center>
    <a href="{{ URL('HurufJepang') }}"><button class="btn btn-danger">Huruf Jepang</button></a>
  <a href="{{ URL('SalamJepang') }}"><button class="btn btn-warning">Kosa Kata</button></a>
  <a href="{{ URL('Kalimat') }}"><button class="btn btn-info">Kalimat</button></a>
    <button class="btn btn-success">Percakapan</button>
  </center>
  </div>
  </section>

@endsection
 