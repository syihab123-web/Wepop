@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Konsonan Rangkap Han-geul / 겹자음 [kyôp ca-eum]</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
       
      <p></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
  
      <div class="materi">Konsonan rangkap dalam Hangeul terbagi dua, yaitu konsonan rangkap sama dan konsonan rangkap beda.
      <p></p>
      <h3>Konsonan Rangkap Sama</h3>
      <p>Konsonan rangkap sama adalah konsonan yang terdiri dari 2 huruf konsonan yang sama</p>
      <center>
      </style>
      <p></p>
      <table class="tabel-vokal-rangkap" border="1" width="80%">
        <tr align="center" bgcolor="grey" style="font-weight: bold;">
          <td>Huruf</td>
          <td>Nama Huruf</td>
          <td>Romawi</td>
        </tr>
        <tr align="center">
          <td>ㄲ</td>
          <td>쌍기역 [ssang ki-yôk]</td>
          <td>kk</td>
        </tr>
        <tr align="center">
          <td>ㄸ</td>
          <td>쌍디귿 [ssang ti-geut]</td>
          <td>tt</td>
        </tr>
        <tr align="center">
          <td>ㅉ</td>
          <td>쌍지읒 [ssang ci-eut]</td>
          <td>cc</td>
        </tr>
        <tr align="center">
          <td>ㅃ</td>
          <td>쌍비읍 [ssang pi-eup]</td>
          <td>pp</td>
        </tr>
        <tr align="center">
          <td>ㅆ</td>
          <td>쌍시옷 [ssang si-ot]</td>
          <td>ss</td>
        </tr>
      </table>
    </center>


    <p></p>
    <p>Cara pengucapan 'konsonan rangkap sama' ini adalah suaranya diucapkan lebih tajam dan lebih kuat dari bunyi konsonan tunggal. Konsonan rangkap ini kadang menjadi kendali bagi non-korea karena baik pengucapan serta cara menjelaskannya pun sulit.</p>
    <p></p>
    <h4><b>Contoh:</b></h4>
    <p>1. ㄱ：ㄲ → 굴 [kul: tiram] : 꿀 [kkul: madu]</p>
    <audio src="/audio/kul-kkul.mp3" controls></audio>
    <P></P>
    <p>2. ㄷ：ㄸ：ㅌ → 달 [tal: bulan] : 딸 [ttal: anak (pr)] : 탈 [thal: topeng]</p>
    <audio src="/audio/tal-ttal-thal.mp3" controls></audio>
    <P></P>
    <p>3. ㅈ：ㅉ：ㅊ → 자다 [ca-da: tidur] : 짜다 [cca-da: asin] : 차다 [cha-da: dingin]</p>
    <audio src="/audio/cada-ccada-chada.mp3" controls></audio>
    <p></p>
    <p>4. ㅂ：ㅃ → 방 [pang: kamar] : 빵 [ppang: roti]</p>
    <audio src="/audio/pang-ppang.mp3" controls></audio>
    <p></p>
    <p>5. ㅅ：ㅆ → 살다 [sal-da: tinggal] : 싸다 [ssa-da: murah</p>
      <audio src="/audio/salda-ssada.mp3" controls></audio>

      <h3>Konsonan Rangkap Beda</h3>
      <p></p>
      </div>
    <div btn-pilihan>
      <a class="previous" href="{{ URL('KonsonanHangeul') }}">PREVIOUS</a>
    </div>
    </div>
  </div>
</div>
</section>

@endsection

