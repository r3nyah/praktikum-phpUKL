<?php include "header.php"; 
if($_SESSION['level'] != 'admin'){
	header('location:login.php');
}
?>

<h3>Data Admin dan Petugas</h3>
<a href="tambah_admin.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>No</th>
        <th>idadmin</th>
        <th>username</th>
        <th>password</th>
		<th>namalengkap</th>
		<th>level</th>
	</tr>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM admin ORDER BY idadmin ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
            <td>$d[idadmin]</td>
            <td>$d[username]</td>
            <td>$d[password]</td>
			<td>$d[namalengkap]</td>
            <td>$d[level]</td>
			<td>
				<a href='edit_admin.php?id=$d[idadmin]'>Edit</a> /
				<a href='hapus_admin.php?id=$d[idadmin]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<?php include "footer.php"; ?>