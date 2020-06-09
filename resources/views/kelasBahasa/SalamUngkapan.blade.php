@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Korean!</h1>
      <p class="lead">Salam dan Ungkapan Penting</p>
       <center><img class="korean" src="/img/korean.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <p></p>
  <center>
  <div class="materi">Dalam Bahasa Korea, kosa kata terbagi dalam tiga tingkatan yaitu formal, informal dan banmal. Penggunaannya tergantung pada situasi dan lawan bicara kita.
  <p></p>
  <table border="1" cellpadding="2">
    <tr align="center" bgcolor="grey">
      <th>Formal</th>
      <th>Informal</th>
      <th>Banmal</th>
    </tr>
    <tr align="center" >
      <td>안녕하십니까</td>
      <td>안녕하세요</td>
      <td>안녕 </td>
    </tr>
    <tr align="center">
      <td>an-n'yông-ha-sim-ni-kka</td>
      <td>an-n'yông-ha-se-yo</td>
      <td>an-n'yông</td>
    </tr>
    <tr align="center" bgcolor="#BDB76B">
      <td colspan="3">selamat pagi/siang/malam, apa kabar, hai</td>
    </tr>
    <tr align="center">
      <td>안녕히가십시요</td>
      <td>안녕히가세요</td>
      <td>잘가</td>
    </tr>
    <tr align="center">
      <td>an-n'yông-i-ka-sip-si-yo</td>
      <td>an-n'yông-i-ka-se-yo</td>
      <td>cal-ka</td>
    </tr>
    <tr align="center" bgcolor="#BDB76B">
      <td colspan="3">selamat jalan</td>
    </tr>
    <tr>
    <td>안녕히계십시요</td>
    <td>안녕히계세요</td>
    <td>잘있어</td>
  </tr>
  <tr>
    <td>an-n'yông-i-ge-sip-si-yo</td>
    <td>an-n'yông-i-ge-se-yo</td>
    <td>car-is-sô</td>
  </tr>
  <tr align="center" bgcolor="#BDB76B">
    <td colspan="3">selamat tinggal</td>
  </tr>
  <tr align="center">
    <td>안녕히 주무십시요</td>
    <td>안녕히 주무세요</td>
    <td>잘자</td>
  </tr>
  <tr align="center">
    <td>an-n'yông-i-ju-mu-sip-si-yo</td>
    <td>an-n'yông-i-ju-mu-se-yo</td>
    <td>cal-ja</td>
  </tr>
  <tr align="center" bgcolor="#BDB76B">
    <td colspan="3">selamat tidur</td>
  </tr>
  <tr align="center">
    <td>축하합니다</td>
    <td>축하 해요</td>
    <td>축하 해</td>
  </tr>
  <tr align="center">
    <td>chu-kha-ham-ni-da</td>
    <td>chu-kha-hæ-yo</td>
    <td>chu-kha-hæ</td>
  </tr>
  <tr align="center" bgcolor="#BDB76B">
    <td colspan="3">selamat!</td>
  </tr>
  <tr align="center">
    <td>생일축하합니다</td>
    <td>생일축하 해요</td>
    <td>생일축하 해</td>
  </tr>
  <tr align="center">
    <td>sæng-il-chu-kha-ham-ni-da</td>
    <td>sæng-il-chu-kha-hæ-yo</td>
    <td>sæng-il-chu-kha-hæ</td>
  </tr>
  <tr align="center" bgcolor="#BDB76B">
    <td colspan="3">selamat ulang tahun</td>
  </tr>
  <tr align="center">
    <td>새해 복 많이 받으십시오</td>
    <td>새해 복 많이 받으세요</td>
    <td>새해 복 많이 받아</td>
  </tr>
  <tr align="center">
    <td>sæ-hæ-bok-ma-ni-pa-deu-sip-si-o</td>
    <td>sæ-hæ-bok-ma-ni-pa-deu-se-yo</td>
    <td>sæ-hæ-bok-ma-ni-pa-da</td>
  </tr>
  <tr align="center" bgcolor="#BDB76B">
    <td colspan="3">selamat tahun baru!</td>
  </tr>
  <tr align="center">
    <td>만나서 반갑습니다</td>
    <td>만나서 반가워요</td>
    <td>만나서 반가워</td>
  </tr>
  <tr align="center">
    <td>man-na-sô ban-gap-seum-ni-da</td>
    <td>man-na-sô ban-ga-wo-yo</td>
    <td>man-na-sô ban-ga-wo</td>
  </tr>
  <tr align="center" bgcolor="#BDB76B">
    <td colspan="3">senang bertemu anda</td>
  </tr>

  </table>
</div>
</center>


<div btn-pilihan>

  
</div>
  </section>

@endsection
