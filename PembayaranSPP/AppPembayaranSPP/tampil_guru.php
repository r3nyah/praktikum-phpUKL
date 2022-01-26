<?php include "header.php"; 
if($_SESSION['level'] != 'admin'){
	header('location:login.php');
}?>

<h3>Data Guru</h3>
<a href="tambah_guru.php">Tambah Data</a>
<link rel="stylesheet" type="text/css" href="CSSresart.css">
<table border="1">
	<div class="secondarticle">
	<tr>
		<th>No</th>
		<th>Nama Guru</th>
		<th>Aksi</th>
	</tr>
	</div>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[namaguru]</td>
			<td>
				<a href='edit_guru.php?id=$d[idguru]'>Edit</a> /
				<a href='hapus_guru.php?id=$d[idguru]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<?php include "footer.php"; ?>