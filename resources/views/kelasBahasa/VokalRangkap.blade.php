@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Vokal Rangkap dalam Hangeul</p>
      <center><img src="/img/korean.jpg" width="300" height="200"></center>
      <p></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
              
        <div class="materi">Vokal rangkap dalam Hangeul merupakan bentuk dan bunyi baru yang dihasilkan dari gabungan beberapa huruf vokal. Huruf vokal rangkap ini terdiri atas 11 huruf.

        <center>
        </style>
        <p></p>
        <table class="tabel-vokal-rangkap" border="1" width="80%">
          <tr align="center" bgcolor="grey" style="font-weight: bold;">
            <td>Gabungan</td>
            <td>Vokal Rangkap</td>
            <td>Romanisasi</td>
            <td>Pelafalan</td>
          </tr>
          <tr align="center">
            <td>ㅏ+ㅣ</td>
            <td>ㅐ</td>
            <td>ae</td>
            <td>ε</td>
          </tr>
          <tr align="center">
            <td>ㅑ+ㅣ</td>
            <td>ㅒ</td>
            <td>yae</td>
            <td>yε</td>
          </tr>
          <tr align="center">
            <td>ㅓ+ㅣ</td>
            <td>ㅔ</td>
            <td>e</td>
            <td>e</td>
          </tr>
          <tr align="center">
            <td>ㅕ+ㅣ</td>
            <td>ㅖ</td>
            <td>ye</td>
            <td>ye</td>
          </tr>
          <tr align="center">
            <td>ㅗ+ㅣ</td>
            <td>ㅘ</td>
            <td>oe</td>
            <td>we</td>
          </tr>
          <tr align="center">
            <td>ㅗ+ㅏ</td>
            <td>ㅘ</td>
            <td>wa</td>
            <td>wa</td>
          </tr>
          <tr align="center">
            <td>ㅗ+ㅐ</td>
            <td>ㅙ</td>
            <td>wae</td>
            <td>wε</td>
          </tr>
          <tr align="center">
            <td>ㅜ+ㅓ</td>
            <td>ㅝ</td>
            <td>wo</td>
            <td>wo</td>
          </tr>
          <tr align="center">
            <td>ㅜ+ㅔ</td>
            <td>ㅞ</td>
            <td>we</td>
            <td>we</td>
          </tr>
          <tr align="center">
            <td>ㅜ+ㅣ</td>
            <td>ㅟ</td>
            <td>wi</td>
            <td>wi</td>
          </tr>
          <tr align="center">
            <td>ㅡ+ㅣ</td>
            <td>ㅢ</td>
            <td>eui</td>
            <td>eui</td>
          </tr>
        </table>
      </center>
      <p></p>
      <p>Untuk menghasilkan bunyi vokal, vokal rangkap tidak bisa berdiri sendiri, melainkan harus digabung dengan huruf konsonan <i>ieung</i> (ㅇ).</p>
      <p></p>
      <h3><b>Contoh: ㅖ &#8594; 예 = ye</h3></b>
        </div>
      <div btn-pilihan>
        <a href="{{ URL('VokalHangeul') }}">PREVIOUS</a>
        <a href="{{ URL('KonsonanHangeul') }}" style="float: right;">NEXT</a>
      </div>
    </div>
  </div>
</div>
  </section>

@endsection
