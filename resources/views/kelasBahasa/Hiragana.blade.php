@extends('chat.template')

@section('title', 'Belajar Bahasa')

@section('container')
<section class="jumbotron" id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Let's Learn Japanese!</h1>
      <p class="lead">Hiragana</p>
       <center><img class="japan" src="/img/japan.jpg" width="300" height="200"></center>
    </div>
  </div>
  <p></p>
  <div class="materi">
  <p>Hiragana merupakan aksara suku kata (silabis) yang melambangkan suatu bunyi tertentu dan tidak memiliki arti apa pun layaknya abjad dalam Bahasa Indonesia. Aksara Hiragana memiliki 104 huruf yang terdiri dari 46 huruf pokok a-n, 25 huruf menggunakan teng-teng (") dan maru (o) dan 33 yang menggunakan kombinasi ya-yu-yo kecil.</p>
  
  <center>
  <table border="1" width="80%">
    <tr align="center" bgcolor="grey" style="font-weight: bold;">
      <th colspan="12">Huruf Pokok</th>
    </tr>
    <tr align="center">
      <th colspan="2">あ A</th>
      <th colspan="2">い I</th>
      <th colspan="2">う U</th>
      <th colspan="2">え E</th>
      <th colspan="2">お O</th>
      <th colspan="2">ん N</th>
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
      <th colspan="2"></th>
    </tr>
    <tr align="center">
      <td>か</td>
      <td>ka</td>
      <td>き</td>
      <td>ki</td>
      <td>く</td>
      <td>ku</td>
      <td>け</td>
      <td>ke</td>
      <td>こ</td>
      <td>ko</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>さ</td>
      <td>sa</td>
      <td>し</td>
      <td>shi</td>
      <td>す</td>
      <td>su</td>
      <td>せ</td>
      <td>se</td>
      <td>そ</td>
      <td>so</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>た</td>
      <td>ta</td>
      <td>ち</td>
      <td>chi</td>
      <td>つ</td>
      <td>tsu</td>
      <td>て</td>
      <td>te</td>
      <td>と</td>
      <td>to</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>な</td>
      <td>na</td>
      <td>に</td>
      <td>ni</td>
      <td>ぬ</td>
      <td>nu</td>
      <td>ね</td>
      <td>ne</td>
      <td>の</td>
      <td>no</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>は</td>
      <td>ha</td>
      <td>ひ</td>
      <td>hi</td>
      <td>ふ</td>
      <td>fu</td>
      <td>へ</td>
      <td>he</td>
      <td>ほ</td>
      <td>ho</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>ま</td>>
      <td>ma</td>
      <td>み</td>
      <td>mi</td>
      <td>む</td>
      <td>mu</td>
      <td>め</td>
      <td>me</td>
      <td>も</td>
      <td>mo</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>や</td>
      <td>ya</td>
      <td></td>
      <td></td>
      <td>ゆ</td>
      <td>yu</td>
      <td></td>
      <td></td>
      <td>よ</td>
      <td>yo</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>ら</td>
      <td>ra</td>
      <td>り</td>
      <td>ri</td>
      <td>る</td>
      <td>ru</td>
      <td>れ</td>
      <td>re</td>
      <td>ろ</td>
      <td>ro</td>
      <td colspan="2"></td>
    </tr>
    <tr align="center">
      <td>わ</td>
      <td>wa</td>
      <td>ゐ</td>
      <td>wi</td>
      <td></td>
      <td></td>
      <td>ゑ</td>
      <td>we</td>
      <td>を</td>
      <td>wo</td>
      <td colspan="2"></td>
    </tr>
  </table>
  <br>
  <a href="{{ URL('HurufJepang') }}"><button class="btn btn-danger">Back</button></a>
</center>
  
  </div>
  </section>

@endsection
 
