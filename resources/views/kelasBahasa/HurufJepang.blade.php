@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Japanese!</h1>
      <p class="lead">Huruf Jepang</p>
       <center><img class="japan" src="/img/japan.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi">Bahasa Jepang memiliki tiga jenis huruf: Hiragana, Katakana dan Kanji.
  <p>Huruf Kanji berasal dari Tiongkok dan diadaptasi di Jepang pada zaman dahulu. Sedangkan Hiragana dan Katakana merupakan tulisan asli Jepang. Namun, bentuk Hiragana dan Katakana pun diadaptasi dari Huruf Kanji. Bentuk Hiragana disederhanakan dari bentuk huruf Kanji, sedangkan Katakana diciptakan dari sebuah komponen grafis yang diambil dari Kanji. Ketiga huruf tersebut memiliki fungsi yang berbeda dan digunakan sesuai aturan dalam Bahasa Jepang.</p>
  <center>
  <a href="{{ URL('Hiragana') }}"><button class="btn btn-danger">Hiragana</button></a>
  <a href="{{ URL('Katakana') }}"><button class="btn btn-danger">Katakana</button></a>
  <a href="{{ URL('Kanji') }}"><button class="btn btn-danger">Kanji</button></a>
  </center>
  </div>
  </section>

@endsection
