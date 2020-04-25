<?php
require 'koneksi2.php';


if (isset($_POST["submit"]) && $_POST['nama'] == '') {
  echo "<script> alert('data harus diisi!');
  window.location.href='../contact.php'</script>";
  exit;
} else {
function contact_us() {
  global $koneksi1;


  $Nama = $_POST["nama"];
  $Email = $_POST["email"];
  $Subject = $_POST["subject"];
  $Pesan = $_POST["pesan"];

	mysqli_query($koneksi1, "INSERT INTO contact_us VALUES('$Nama','$Email','$Subject','$Pesan')");
  return mysqli_affected_rows($koneksi1);
}
}
?>