<?php
require 'admin/koneksi2.php';

if (isset($_POST["submit"]) && $_POST['nama'] == '') {
  echo "<script> alert('data harus diisi!');
  window.location.href=''</script>";
  exit;
} else {
function reservasi() {
  global $koneksi1;


  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $tel = $_POST["telepon"];
  $tanggal = $_POST["tanggal"];
  $waktu = $_POST["waktu"];
  $jumlah_orang = $_POST["jumlah_orang"];

  mysqli_query($koneksi1, "INSERT INTO pengunjung VALUES('$nama','$email','$tel','$tanggal','$waktu','$jumlah_orang')");
  return mysqli_affected_rows($koneksi1);
}
}
?>