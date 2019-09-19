<?php 
 session_start();
	include 'koneksi.php';
	$id_user = $_SESSION['id_user'];
	$nobp = $_POST['nobp'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jk = $_POST['jk'];
	$alamat_rumah = $_POST['alamat_rumah'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$alasan  = $_POST['alasan'];
	$divisi = $_POST['divisi'];
	$cekuser = 'v';

	$cek_user=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM calon WHERE nobp='$nobp'"));
	if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Maaf NOBP sudah terdaftar!");
              window.location="index.php?simpan=gagal";
              </script>';
              exit();
		}

		$results = mysqli_query($conn, "INSERT INTO calon VALUES(null,'$id_user','$nobp','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$jk','$alamat_rumah','$asal_sekolah','$alasan','$divisi','$cekuser')");


	if ($results) {
		header('location:index.php?simpan=sukses');
	}else{
		header('location:index.php?simpan=gagal');
	}

 ?>