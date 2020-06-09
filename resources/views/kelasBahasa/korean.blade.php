@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center" id="k">
      <h1 class="display-4">Annyeong Haseyo!</h1>
      <p class="lead">Selamat datang di Kelas Bahasa Korea! Belajar apa hari ini?</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi"><center>
    <a href="{{ URL('Hangeul') }}"><button>Hangeul</button></a>
    <a href="{{ URL('SalamUngkapan') }}"><button>Kosa Kata</button></a>
    <a href="{{ URL('PolaKalimatKorean') }}"><button>Kalimat</button></a>
    <button>Percakapan</button>
  </center>
  </div>
  </section>

@endsection
