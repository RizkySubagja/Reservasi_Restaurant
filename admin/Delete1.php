<?php
include "Koneksi2.php";

$Email=$_GET['email'];

mysqli_query($koneksi1, "delete from pengunjung where email='$Email'");

header("location:index1.php");
?>