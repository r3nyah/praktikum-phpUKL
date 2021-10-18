<?php
    include '../connect.php';

    $id_mk = $_GET['id_mk'];
    $query = "DELETE FROM matakuliah WHERE id_mk='$id_mk'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Hapus Data <br>";
    }else {
        echo "Gagal Hapus Data <br>";
        echo mysqli_error($connect);
    }
    echo "<a href='read.php'>Lihat Data</a>"
?>