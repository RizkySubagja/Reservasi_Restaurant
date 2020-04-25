<?php
include "Koneksi2.php";

$nama=$_GET['nama'];

mysqli_query($koneksi1, "delete from reservasi where nama='$nama'");

header("location:index2.php");
?>