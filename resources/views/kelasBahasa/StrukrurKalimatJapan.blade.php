@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Japanese!</h1>
      <p class="lead">Struktur Kalimat dalam Bahasa Jepang</p>
       <center><img class="japan" src="/img/japan.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi">
  <h4>Inti Struktur Kalimat</h4>
  <center><img src="/img/unsur.png"></center>
  <br>
  <p>Inti struktur kalimat dalam Bahasa Jepang terdiri atas pola kalimat: "Unsur + Predikat". Predikat harus terdapat dalam kalimat dan diletakkan pada akhir suatu kalimat. Bahasa Jepag dikenal sebagai bahasa yang mengutamakan predikat da unsur-unsur lain seperti subjek., objek dan keterangan disusun untuk dihubungkan dengan predikat. Pada dasarnya, unsur dapat diletakkan di depan predikat saja.</p>
  <br><br>
  <h4>Contoh kalimat fleksibel: unsur1 + unsur2 + ... +predikat</h4>
  <center><img src="/img/kalimat.png"></center>
 <br><br>
  <h4>Penentuan Unsur Kata Benda dalam Kalimat</h4>
 <h5>Struktur Kalimat</h5>
 <center><img src="/img/unsur1.png" style="width: 700px; height: 400px;"></center>
 <p><font color="red">Wa</font> menunjukkan subjek atau topik.</p>
 <p><font color="red">O</font> menunjukkan objek.</p>
 <p><font color="red">De</font> menunjukkan tempat.</p>
 <p>Unsur untuk kata benda dalam Bahasa Indonesia ditentukan oleh urutan kata dalam kalimat. Sedangkan unsur untuk kata benda (subjek, objek) dalam Bahasa Jepang ditentukan oleh partikel (kata bantu).</p>
 <p>Fungsi partikel dalam Bahasa Jepang agak mirip dengan kata depan dalam Bahasa Indonesia yang dapat menunjukkan waktu, tempat, arah dsb. Tetapi justru partikel dalam Bahasa Jepang merupakan kata belakang dan dapat menunjuukan subjek dan objek juga. Partikel dalam Bahasa Jepang menunjukkan hubungan antara kata yang stu dengan kata yang lain. Oleh karena adanya partikel, unsur-unsur dalam Bahasa Jepang dapat disususn secara fleksibel.</p>
  </div>
  </section>

@endsection
