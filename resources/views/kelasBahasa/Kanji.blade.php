@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Japanese!</h1>
      <p class="lead">Kanji</p>
       <center><img class="japan" src="/img/japan.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi">
  <p>Kanji berasal dari China selama Zama Peradaban Sungai Kuning. Kanji merupakan huruf yang dibanggakan oleh peradaban yang menggunakannya karena merupakan huruf kuno yang masih digunakan hingga sekarang.</p>
  <p>Kanji aalah huruf dengan jumlah karakter terbanyak dalam sejarah, diperkirakan melebihi 100.000 huruf. Kanji menyebar ke berbagai negara dan wilayah. Hal ini yang menyebabkan kanji memiliki banyak variasi. Termasuk di Negara Jepang, Hiragana dan Katakana merupakan turunan dari Kanji.</p>
  <p></p>
  <p>Secara garis besar, Kanji memiliki dua cara baca yaitu Onyomi dan Kunyomi.</p>
  <p></p>
  <p><h5>Onyomi (Chinese Reading)</h5></p>
  <p>Onyomi adalah cara baca dari Cina asli. Cara baca Cina yang dimaksud adalah cara baca yang paling dekat dengan cara baca Cina menurut telingan Orang Jepang.</p>
  <p><h6>Contoh:</h6></p>
  <p style="color: red;">無理</p>
  <p>Mandarin: Wúlǐ</p>
  <p>Onyomi: Muri</p>
  <P></P>
  <p><h5>Kunyomi (Japanese Reading)</h5></p>
  <p>Jauh sebelum Kanji datang, Jepang sudah memiliki bahasa sendiri walau hanya sebatas bahasa lisan. Kata-kata Jepang asli tersebut diasosiasikan dan dilekatkan kepada Kanji.</p>
  <p><h6>Contoh:</h6></p>
  <p>Air</p>
  <p>Jepang: Mizu</p>
  <p>Mandarin: 水 (Shuǐ)</p>
  <p>Bahasa Jepang air tidak dihilangkan, hana penulisannya yang diasosiakan dengan karakter</p>
  
  <a href="PenulisanJapan.php" style="float: right;">NEXT</a>
  
  
  </fieldset>
  </div>
  </section>

@endsection
    


