<?php
include 'admin/config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "select * from login where username = '$username' and password = '$password' ";

$data = mysqli_query($koneksi,$sql);

$cek = mysqli_num_rows($data);

 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:indexlog.php");
}else{
	header("location:login.php?pesan=gagal");	
}
 
?>