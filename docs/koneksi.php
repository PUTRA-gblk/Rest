<?php
$host     = '174.129.128.48';
$user     = 'root';
$password = 'root'; 
$dbase       = 'Koneksi';
$con = mysqli_connect($host, 
$user, $password, $dbase) or 
die(mysqli_error());
?>