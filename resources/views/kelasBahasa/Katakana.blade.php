@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Japanese!</h1>
      <p class="lead">Katakana</p>
       <center><img class="japan" src="/img/japan.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi">
  <p>Katakana merupakan huruf penanda bunyi, sama dengan Hiragana.Pada umumnya Katakana memiliki 5 huruf vokal dan 40 huruf konsonan yang digabung dengan vokal. Sama dengan Hiragana, Katakana juga memiliki 1 huruf mati yaitu N.</p>
  <p></p>
  <center>
    <table border="1" width="80%">
      <tr align="center" bgcolor="grey" style="font-weight: bold;">
        <th colspan="2">ア A</th>
        <th colspan="2">イ I</th>
        <th colspan="2">ウ u</th>
        <th colspan="2">エ e</th>
        <th colspan="2">オ o</th>
      </tr>
      <tr align="center">
        <th>Huruf</th>
        <th>Pelafalan</th>
        <th>Huruf</th>
        <th>Pelafalan</th>
        <th>Huruf</th>
        <th>Pelafalan</th>
        <th>Huruf</th>
        <th>Pelafalan</th>
        <th>Huruf</th>
        <th>Pelafalan</th>
      </tr>
      <tr align="center">
        <td>カ</td>
        <td>ka</td>
        <td>キ</td>
        <td>ki</td>
        <td>ク</td>
        <td>ku</td>
        <td>ケ</td>
        <td>ke</td>
        <td>コ</td>
        <td>ko</td>
      </tr>
      <tr align="center">
        <td>サ</td>
        <td>sa</td>
        <td>シ</td>
        <td>shi</td>
        <td>ス</td>
        <td>su</td>
        <td>セ</td>
        <td>se</td>
        <td>ソ</td>
        <td>so</td>
      </tr>
      <tr align="center">
        <td>タ</td>
        <td>ta</td>
        <td>チ</td>
        <td>chi</td>
        <td>ツ</td>
        <td>tsu</td>
        <td>テ</td>
        <td>te</td>
        <td>ト</td>
        <td>to</td>
      </tr>
      <tr align="center">
        <td>ナ</td>
        <td>na</td>
        <td>ニ </td>
        <td>ni</td>
        <td>ヌ</td>
        <td>nu</td>
        <td>ネ</td>
        <td>ne</td>
        <td>ノ</td>
        <td>no</td>
      </tr>
      <tr align="center">
        <td>ハ </td>
        <td>ha</td>
        <td>ヒ</td>
        <td>hi</td>
        <td>フ</td>
        <td>fu</td>
        <td>ヘ</td>
        <td>he</td>
        <td>ホ</td>
        <td>ho</td>
      </tr>
      <tr align="center">
        <td>マ</td>
        <td>ma</td>
        <td>ミ</td>
        <td>mi</td>
        <td>ミ</td>
        <td>mu</td>
        <td>メ</td>
        <td>me</td>
        <td>モ</td>
        <td>mo</td>
      </tr>
      <tr align="center">
        <td>ヤ</td>
        <td>ya</td>
        <td></td>
        <td></td>
        <td>ユ</td>
        <td>yu</td>
        <td colspan="2"></td>
        <td>ヨ</td>
        <td>yo</td>
      </tr>
      <tr align="center">
        <td>ラ</td>
        <td>ra</td>
        <td>リ</td>
        <td>ri</td>
        <td>ル</td>
        <td>ru</td>
        <td>レ</td>
        <td>re</td>
        <td>ロ</td>
        <td>ro</td>
      </tr>
      <tr align="center">
        <td>ワ</td>
        <td>wa</td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td>ヲ </td>
        <td>wo</td>
      </tr>
      <tr align="center">
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td>ン</td>
        <td>n</td>
      </tr>
    </table>
  </center>
<br><br>
  <p></p>
  <p><h6>Contoh Penulisan:</h6></p>
  <p>ミルク = Miruku: Susu</p>
  <P>テニス = Tenisu: Tenis</P>
  <p>Selain huruf-huruf dasar, terdapat Huruf Tenten dan Maru.</p>
  <p>Selain penanda bunyi, terdapat beberapa fungsi lain dari Katakana.</p>
  <p></p>
  <h5>Menulis Kata Serapan Asing</h5>
  <p>Dalam Bahasa Jepang, banyak kata yang merupakan serapan dari bahasa asing. Untuk menulis serapan kata, diperlukan Huruf Katakana.</p>
  <p><h6>Contoh: </h6></p>
  <center>
    <p style="color: red;">ホテル</p>
    <p>Hoteru: Hotel</p>
    <p style="color: red;">タクシー</p>
    <p>Takushii: Taxi</p>
    <p style="color: red;">インターネット</p>
    <p>Intaanetto: Internet</p>
  </center>
  <p><h5>Menulis Onomatope</h5></p>
  <p>Onomatope adalah kata tiruan bunyi, biasanya terdapat pada komik atau dalam kehidupan sehari-hari.</p>
  <p><h6>Contoh:</h6></p>
  <center>
  <p style="color: red;">ピンポン</p>
  <p>Pin pon: Suara Bel </p>
  <p style="color: red;">ドキドキ</p>
  <p>Doki doki: Deg-degan</p>
  </center>
  <p><h5>Menulis Nama Non Jepang</h5></p>
  <p>Nama Orang Jepang akan ditulis menggunakan Huruf Hiraga atau Kanji, namun nama non Jepang menggunakan Huruf Katakana dalam penulisannya.</p>
  <p><h6>Contoh:</h6></p>
  <center>
  <p style="color: red;">リザル</p>
  <p>Rizaru: Rizal</p>
  <p style="color: red;">ジョナサン</p>
  <p>Jonasan: Jhonathan</p>
  </center>
  <p><h5>Nama Tempat di Luar Jepang</h5></p>
  <p>Selain untuk menulis nama orang non Jepang, Katakanan juga digunakan untuk penulisan tempat di luar Jepang.</p>
  <p><h6>Contoh:</h6></p>
  <center>
    <p style="color: red;">ジャカルタ</p>
    <p>Jakaruta: Jakarta</p>
    <p style="color: red;">スラバヤ</p>
    <p>Surabaya</p>
    <p style="color: red;">ハワイ</p>
    <p>Hawai</p>
  </center>
  </div>
  </section>

@endsection
 
