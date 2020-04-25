<?php
include "Koneksi2.php";

$Email=$_GET['email'];

mysqli_query($koneksi1, "delete from contact_us where email='$Email'");

header("location:index.php");
?>