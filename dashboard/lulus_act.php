<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT id,id_user FROM calon WHERE id = '$id'");
 while($d = mysqli_fetch_array($data)){
 $id_calon = $d['id']; 
 $id_user = $d['id_user'];
 $tahap1 = 'lulus';
 $tahap2 = 'belum';
 $tahap3 = 'belum';
 $tambah = mysqli_query($conn, "INSERT INTO cek values(null,'$id_calon','$id_user','$tahap1','$tahap2','$tahap3')");
 if ($tambah) {
 	echo "sukses";
 }else{
 	echo "gagal";
 }
}
?>