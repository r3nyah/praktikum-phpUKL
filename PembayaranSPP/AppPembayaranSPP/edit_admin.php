<?php include "header.php"; 
if($_SESSION['level'] != 'admin'){
	header('location:login.php');
}?>

<?php
$sqlEdit=mysqli_query($konek, "SELECT * FROM admin WHERE idadmin='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<h3>Edit Data Admin dan Petugas</h3>
<form method="post" action="">
	<input type="hidden" name="idadmin" value="<?php echo $e['idadmin']; ?>" />
	<table>
		<tr>
			<td>Nama Guru</td>
			<td><input type="text" name="namalengkap" value="<?php echo $e['namalengkap']; ?>" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $e['username']; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update" /></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$id			= $_POST['idadmin'];
	$nama 		= $_POST['namalengkap'];
	$user 		= $_POST['username'];
	//$password	= $_POST['password'];
	
	if($nama==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses edit data guru
		$edit = mysqli_query($konek, "UPDATE admin SET namalengkap='$nama' , username='$user' WHERE idadmin='$id'");
		
		if(!$edit){
			echo "Edit data gagal!!";
		}else{
			header('location:tampil_admin.php');
		}
	}
}
?>

<?php include "footer.php"; ?>