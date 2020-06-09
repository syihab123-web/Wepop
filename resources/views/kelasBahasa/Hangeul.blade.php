@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Sejarah Singkat HanGeul(한글)</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <p></p>
  <div class="container">
    <div class="row">
          <div class="col">
            <div class="materi">Korea memiliki huruf tersendiri yang disebut HanGul (한글: dibaca "han-geul"), yang diciptakan oleh Raja Sejong pada masa pemerintahan dinasti Yi sekitar tahun 1443. 
            <p><center><img src="/img/kingsejong.jpg" width="400" height="300"></center></p>
            <p>Awal keberadaan Hangeul banyak memperoleh tantangan dari berbagai kalangan. Banyak yang menilai bahwa huruf Hangeul adalah huruf rendahan, huruf anak kecil atau huruf kampungan. Tetapi pada masa pendudukan Jepang justru huruf Hangeul yang banyak dipakai sebagai media tulisan. Sehingga keberadaannya sangat berjasa sampai sekarang.</p>
            <p>Konsonan rangkap sama adalah konsonan yang terdiri dari 2 huruf konsonan yang sama</p>
            <p>Baru sejak 1948 Pemerintah Republik Korea (대한민국: dibaca "tæhan min guk") menetapkan pemakaian Hangeul di sekolah-sekolah dan dokumen-dokumen resmi. Sampai saat ini di seluruh Korea sudah memakai Hangeul, namun huruf Kanji Cina (Hanja) pun masih dipakai untuk kata-kata tertentu.</p>
            <p>Huruf Hangeul mempunyai 24 karakter dasar, terdiri dari 10 huruf vokal dan 14 huruf konsonan. Kemudian dari sejumlah karakter tersebut dikembangkan lagi dengan ditambahkannya 11 huruf vokal rangkap dan 16 huruf konsonan rangkap</p>
          </div>

          <div btn-pilihan>
            <a class="next" href="{{ URL('VokalHangeul') }}" style="float: right;">NEXT</a>
            
          </div>
      </div>
    </div>
  </div>
  </section>

@endsection
