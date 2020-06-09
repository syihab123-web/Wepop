@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Konsonan Hangeul</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
       
      <p></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
  
      <div class="materi">Konsonan dalam Hangeul terbagi ke dalam 14 karakter.

          <center>
          </style>
          <p></p>
          <table class="tabel-vokal-rangkap" border="1" width="80%" style="font-weight: bold;">
            <tr align="center" bgcolor="grey">
              <td>Huruf</td>
              <td>Nama Huruf</td>
            </tr>
            <tr align="center">
              <td>ㄱ</td>
              <td>기역 ( Kiyeok)</td>
            </tr>
            <tr align="center">
              <td>ㄴ</td>
              <td>니은 (Nieun)</td>
            </tr>
            <tr align="center">
              <td>ㄷ</td>
              <td>디귿 (Digeut)</td>
            </tr>
            <tr align="center">
              <td>ㄹ</td>
              <td>리을 (Rieul)</td>
            </tr>
            <tr align="center">
              <td>ㅁ</td>
              <td>미음 (Mieum)</td>
            </tr>
            <tr align="center">
              <td>ㅂ</td>
              <td>비읍 (Bieup)</td>
            </tr>
            <tr align="center">
              <td>ㅅ</td>
              <td>시옷 (Siot)</td>
            </tr>
            <tr align="center">
              <td>ㅇ</td>
              <td>이응 (Ieung)</td>
            </tr>
            <tr align="center">
              <td>ㅈ</td>
              <td>지읒 (Jieut)</td>
            </tr>
            <tr align="center">
              <td>ㅊ</td>
              <td>치읓 (Chieut)</td>
            </tr>
            <tr align="center">
              <td>ㅋ</td>
              <td>키읔 (Khieuk)</td>
            </tr>
            <tr align="center">
              <td>ㅌ</td>
              <td>티읕 (Thieut)</td>
            </tr>
            <tr align="center">
              <td>ㅍ</td>
              <td>피읖 (Phieup)</td>
            </tr>
            <tr align="center">
              <td>ㅎ</td>
              <td>히흫 (Hieut)</td>
            </tr>
          </table>
        </center>
        <p></p>
        <p>Untuk menghasilkan bunyi vokal, vokal rangkap tidak bisa berdiri sendiri, melainkan harus digabung dengan huruf konsonan <i>ieung</i> (ㅇ).</p>
        <p></p>
        <h3><b>Contoh: ㅖ &#8594; 예 = ye</h3></b>
        <p></p>
        <h3>Pengucapan</h3>
        <center>
        <table border="1">
          <tr align="center" bgcolor="grey">
          <th>k/g</th>
          <th>kh</th>
        </tr>
        <tr align="center">
          <td><img src="/img/k.png">
          <p><audio src="/audio/kiyeok.mp3" controls></audio></p>
        </td>
        <td><img src="/img/kh.png">
        <p><audio src="/audio/kh.mp3" controls></audio></p>
        </td>
        </tr>
        <tr align="center" bgcolor="grey">
          <th>t/d</th>
          <th>th</th>
        </tr>
        <tr align="center">
          <td><img src="/img/d.png">
            <p><audio src="/audio/t.mp3" controls></audio></p></td>
          <td><img src="/img/th.png">
            <p><audio src="/audio/th.mp3" controls></audio></p></td>
        </tr>
        <tr align="center" bgcolor="grey">
          <th>p/b</th>
          <th>ph</th>
        </tr>
        <tr align="center">
          <td><img src="/img/p.png">
            <p><audio src="/audio/b.mp3" controls></audio></p></td>
          <td><img src="/img/ph.png">
            <p><audio src="/audio/ph.mp3" controls></audio></p></td>
        </tr>
        <tr align="center" bgcolor="grey">
          <th>c/j</th>
          <th>ch/t</th>
        </tr>
        <tr align="center">
          <td><img src="/img/j.png"></td>
          <td><img src="/img/ch.png"></td>
        </tr>
        </table>
        </center>
          </div>
        <div btn-pilihan>
          <a class="previous" href="{{ URL('VokalRangkap') }}">PREVIOUS</a>
          <a class="next" href="{{ URL('KonsonanRangkap') }}s" style="float: right;">NEXT</a>
        </div>
      </div>
    </div>
  </div>      
  </section>

@endsection
