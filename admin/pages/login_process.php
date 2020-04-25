<?php

include "../Koneksi2.php";

$username = $_POST['username'];

$password = $_POST['password'];

$check = mysqli_query($koneksi1 , "SELECT * from admin WHERE username='$username' AND password='$password'") or die(mysql_error());

if (mysqli_num_rows($check) >= 1){
    while ($row = mysqli_fetch_array($check)){
        session_start();
        $_SESSION['id_admin']= $row['id_admin'];
        ?>

        <script>alert("Selamat Datang,  <?= $row ['username'] ; ?> ! Kamu telah login ke halaman admin!!!");
        window.location.href="../index.php"</script>

        <?php
    }
}else{echo '<script>alert("Masukan Username dan Pasword dengan Benar !!!");
    window.location.href="login.php"</script>';
}
?>