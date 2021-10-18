<?php
    include '../connect.php';

    $id_mk = $_POST['id_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    $query = "UPDATE matakuliah SET nama_mk='$nama_mk', sks='$sks', semester='$semester' WHERE id_mk='$id_mk'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Update Data <br>";
    }else {
        echo "Gagal Update Data <br>";
        echo mysqli_error($connect);
    }
    echo "<a href='read.php'>Lihat Data</a>"
?>