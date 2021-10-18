<?php

include '../connect.php';

$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];
$id_mk = $_POST['id_mk'];

$query = "INSERT INTO matakuliah (nama_mk,sks,semester,id_mk)
          VALUES('$nama_mk','$sks','$semester','$id_mk')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{echo "Berhasil tambahkan data";}
else
{echo "Gagal Tambahkan data";}

echo "<a href='read.php'> Lihat Data</a>";
?>
