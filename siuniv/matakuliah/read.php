<?php

include '../connect.php';

$query = "SELECT * FROM matakuliah";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<body>
    <table border='1'>
    <h2>Data Matakuliah</h2>
    <tr>
        <th>id_mk</th>
        <th>nama_mk</th>
        <th>sks</th>
        <th>semester</th>
        <th>Aksi</th>
    </tr>
<?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data['nama_mk']."</td>";
        echo "<td>".$data['sks']."</td>";
        echo "<td>".$data['semester']."</td>";
        echo "<td>".$data['id_mk']."</td>";
        echo "<td><a href='form-update.php?id_mk=".$data['id_mk']."'>Edit</a> | ";
        echo "<td><a href='delete.php?matakuliah=".$data['id_mk']."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a>";
        echo "</tr>";
        $no++;
}
}else {
    echo " <td colspan='3'> Tidak ada data</td>";
}
?>
</table>
</body>
</html>