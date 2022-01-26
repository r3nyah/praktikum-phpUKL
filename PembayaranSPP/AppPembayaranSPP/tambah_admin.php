<?php include "header.php"; 
if($_SESSION['level'] != 'admin'){
	header('location:login.php');
}?>

<h3>Tambah Data Admin atau Petugas</h3>
<form method="post" action="">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" /></td>
		</tr>
		<tr>
			<td>Nama Admin dan Petugas</td>
			<td><input type="text" name="namalengkap" /></td>
		</tr>
		<tr>
			<td>Pilih Admin / Petugas</td>
			<td>
				<select name="level">
					<option value="" selected>- Pilih Level -</option>
					<?php
					$sqlAdmin=mysqli_query($konek, "SELECT * FROM admin WHERE level");
					while($g=mysqli_fetch_array($sqlAdmin)){
						echo "<option value='$g[idadmin]'>$g[level]</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$nama = mysqli_real_escape_string($konek, $_POST['namalengkap']);
	$pass = mysqli_real_escape_string($konek, $_POST['password']);
	$user = mysqli_real_escape_string($konek, $_POST['username']);
	if($nama==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses simpan data guru
		$simpan = mysqli_query($konek, "INSERT INTO admin(username,password,namalengkap) VALUES ('$user','".md5($pass)."','$nama')");
		
		if(!$simpan){
			echo "Simpan data gagal!!";
		}else{
			header('location:tampil_admin.php');
		}
	}
}
?>

<?php include "footer.php"; ?>