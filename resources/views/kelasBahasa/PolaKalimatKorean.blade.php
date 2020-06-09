@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Pola Kalimat</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
       
      <p></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
          <div class="col">
      <div class="materi">Pola kalimat Bahasa Korea berbeda dengan polakalimat Bahasa Indonesia. Pola Kalimat Bahasa Indonesia memakai prinsip DM (diterangkan-menerangkan), sedangkan pola kalimat Bahasa Korea kebalikannya yaitu MD (menerangkan-diterangkan).

      <center>
      </style>
      <p></p>
      <table border="1" width="80%">
        <tr align="center" bgcolor="grey">
          <td>INDONESIA (DM)</td>
          <td>KOREA (MD)</td>
        </tr>
        <tr align="center">
          <td>Orang Korea</td>
          <td>Korea Orang  (한국 사람)</td>
        </tr>
        <tr align="center">
          <td>Buku besar</td>
          <td>Besar Buku (큰 책)</td>
        </tr>
        <tr align="center">
          <td>Bahasa Korea</td>
          <td>Korea bahasa (한국말)</td>
        </tr>
        <tr align="center">
          <td>Wanita Cantik</td>
          <td>Cantik Wanita ( 예쁜 여자)</td>
        </tr>
        <tr align="center">
          <td>Makan nasi</td>
          <td>Nasi Makan (밥 먹다)</td>
        </tr>
      </table>
    </center>
    <p></p>
    <p>Dalam Bahasa Indonesia, untuk menyusun kalimat lengkap biasa digunakan pola SPOK (Subjek, predikat, objek, keterangan)</p>
    <h5>Contoh:</h5>
    <center>
    <table width="300">
      <tr align="center">
        <td>Ibu</td>
        <td>sedang memasak</td>
        <td>nasi</td>
        <td>di dapur</td>
      </tr>
      <tr align="center">
        <td>S</td>
        <td>P</td>
        <td>O</td>
        <td>K</td>
      </tr>
    </table>
    </center>
    <p>Namun berbeda dengan Bahasa Korea, susunan pola kalimat Bahasa Korea adalah SKOP (Subjek, keterangan, objek, predikat)</p>
    <h5>Contoh:</h5>
    <center>
    <table width="300">
      <tr align="center">
        <td>Ibu</td>
        <td>dapur di</td>
        <td>nasi</td>
        <td>sedang memasak</td>
      </tr>
      <tr align="center">
        <td>S</td>
        <td>K</td>
        <td>O</td>
        <td>P</td>
      </tr>
    </table>
    </center>
      </div>
      </div>
    </div>
  </div>
<div btn-pilihan>
</div>
  </section>

@endsection
