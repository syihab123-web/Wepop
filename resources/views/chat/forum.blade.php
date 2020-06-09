<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forum</title>
</head>
<script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
<script defer src="script.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<style>
  input {
    background-color: azure;
    position: absolute;
    bottom: 20px;
    left: 100px;
    width: 500px;
  }

  button {
    background-color: black;
    color: white;
    position: absolute;
    bottom: 25px;
    right: 80px;
  }

  .ab {
    text-align: center;
    background-color: white;
    width: 50%;
    height: 70%;
    border: 10px;
    box-shadow: 5px 5px 5px 5px black;
    border-color: black;
    margin-left: 380px;
    position: absolute;
    margin-top: 100px;
    top: 100px;
  }

  p {
    margin-top: 30px;
    font-family: cursive;
    font-size: 36px;
    color: dodgerblue;
    text-shadow: 1px 2px black;
  }

  #message-container {
    font-size: 20px;
    font-family: cursive;
    color: black;
    text-align: left;
  }

  img.j {
    width: 300px;
    height: 600px;
  }

  img.k {
    width: 300px;
    height: 600px;
    position: absolute;
    right: 5px;
  }
</style>

@extends('chat.template')

@section('title','Forum chat')

@section('container')
<p style="text-align: center;">WePop Forum</p>
<img src="img/j.jpg" alt="" class="j">
<form class="ab" id="send-container">
  <div id="message-container"></div>
  <input type="text" class="text" id="message-input" placeholder="Type a message" />
  <button type="submit" id="send-button">Send</button>
</form>
<img src="img/p.jpg" alt="" class="k">
@endsection
</body>

</html>