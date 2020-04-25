<?php

$host="127.0.0.1:3036";
$user="RizkySubagja";
$pass="";
$db="restaurant";

$koneksi1=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
	echo "Koneksi gagal , error code: ".mysqli_connect_error();
}
?>