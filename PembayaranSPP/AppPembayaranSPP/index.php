<?php include "header.php";
if($_SESSION['level'] != 'admin'){
	header('location:login.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard AdminPetugas</title>
	<link rel="stylesheet" type="text/css" href="CSSresart.css">
<h3>Selamat datang <?=$_SESSION['username']?>.<br>Anda Berhasil Login.</h3>
</head>

<?php include "footer.php"; ?>
