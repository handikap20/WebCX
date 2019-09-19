<?php 

session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username' AND password='$password'")or die(mysql_error());

if(mysqli_num_rows($query)==1){
	$row = mysqli_fetch_assoc($query);
	$id_user = $row['id_user'];
	$nama_lengkap = $row['nama_lengkap'];
	$username = $row['username'];
	$password = $row['password'];
	$level = $row['level'];
	$email = $row['email'];
	if($row['level'] == "calon"){
		$_SESSION['id_user']=$id_user;
		$_SESSION['username']=$username;
		$_SESSION['level']=$level;
			if ($_SESSION['id_user'] == "1") {
			echo '<script language="javascript">window.location="dashboard/index.php";</script>';
		}
		
	 }elseif ($row['level'] == "admin") {
	 	$_SESSION['id_user']=$id_user;
		$_SESSION['username']=$username;
		$_SESSION['level']=$level;
			echo '<script language="javascript">window.location="dashboard/index_admin.php";</script>';
	}
}		

else{
    	echo '<script language="javascript">window.location="login.php?login=gagal";</script>';
}
 ?>