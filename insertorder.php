<?php
require 'admin/koneksi2.php';

if (isset($_POST["submit"]) && $_POST['nama'] == '') {
  echo "<script> alert('data harus diisi!');
  window.location.href=''</script>";
  exit;
} else {
function order() {
  global $koneksi1;


  $nama = $_POST["nama"];
  $pesanan = $_POST["pesanan"];
  $serving = $_POST["serving"];
  $pesanan1 = $_POST["pesanan_1"];
  $serving1 = $_POST["serving_1"];
  $waktu = $_POST["waktu"];
  $jumlah_orang = $_POST["jumlah_orang"];
  $pesan = $_POST["pesan"];

  mysqli_query($koneksi1, "INSERT INTO reservasi VALUES('$nama','$pesanan','$serving','$pesanan1','$serving1','$waktu','$jumlah_orang','$pesan')");
  return mysqli_affected_rows($koneksi1);
}
}
?>