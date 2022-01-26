<?php include "header_petugas.php"; 
if($_SESSION['level'] != 'petugas'){
	header('location:login.php');
}?>


<h3>Selamat datang <?=$_SESSION['username']?>.<br>Anda Berhasil Login.</h3>

<?php include "footer.php"; ?>
