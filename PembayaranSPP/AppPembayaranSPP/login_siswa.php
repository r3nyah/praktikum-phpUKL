<style >

	input[type="text"] {
	
	margin-bottom: 1px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	}

	input[type="password"] {
	margin-bottom: 20px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	}

body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}


</style>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSSresart.css">
</head>
<body>
<hr/>
<form method="post" action="">
	<div class="article">
	<table>
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis" class="form-control" placeholder="Nomer Induk Siswa" required="" autofocus="" /></td>
		</tr>
		<!--<tr>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control" placeholder="Password" required="" autofocus="" /></td>
		</tr>-->
		<tr>
			<td></td>
			<td><input type="submit" value="Login" /></td>
		</tr>
		<!--<tr>
			<td>Anda siswa?Silahkan login di<a href="login_siswa.php"> sini</a></td>
		</tr>-->
	</table>
	<!--<b>Anda siswa?Silahkan login di <a href="login_siswa.php">sini</a></b>-->
	</div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel untuk menyimpan kiriman dari form
	$nis = $_POST['nis'];
	//$pass = $_POST['password'];
	
	if($nis==''){
		echo "Form belum lengkap!!";
	}else{
		include "koneksi.php";
		//$passmd5 = md5($password);
		//$password = md5($pass);
    	//$query = "SELECT * FROM admin WHERE username='$username' AND password='$pass'";
		$sqlLogin = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$nis'");
		//$cari = mysqli_query($konek, $sqlLogin);
		$jml = mysqli_num_rows($sqlLogin);
		$d=mysqli_fetch_array($sqlLogin);
		$hasil = mysqli_fetch_assoc($sqlLogin);
		if($jml > 0){
			session_start();
			$_SESSION['login']	= true;
			$_SESSION['id']		= $d['idadmin'];
			$_SESSION['username']=$d['username'];
			if(mysqli_num_rows($sqlLogin) == 0){
				echo "<script>alert('Username belum terdaftar!');location.href='login.php';</script>";
			}else{
				// Jika password tidak sesuai dengan yang ada di database
				if($hasil['password'] <> $Pass){
					echo "<script>alert('Password Salah!');location.href='login.php';</script>";
				}else{
					// Jika user sesuai dengan database maka akan redirect ke halaman utama dan akan dibuatkan sesi
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['level'] = $hasil['level'];
					header('location:./index_siswa.php');
				}
			}
			//header('location:./index.php');
		}else{
			echo "<script>alert('Username atau password anda salah!');location.href='login_siswa.php';</script>";
		}
	}
}
?>
</body>
</html>