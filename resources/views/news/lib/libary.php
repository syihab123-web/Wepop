<?php
	 session_start();
	 $host = 'localhost';
	 $user = 'root';
	 $pass = '';
	 $db   = 'jdk';
	 
	 $mysqli = mysqli_connect($host, $user, $pass, $db)
	 	or die('Tidak ada koneksi ke database');
 ?>