<?php ob_start();?>
<?php
include_once('../koneksi.php');
$cek = $_SESSION['username'];
if (!isset ($cek)) {
	header('location:../index.php');
} else {
	$kondisi = "admin";
	if($_SESSION['level'] != $kondisi){
	header('location: ../index.php');
	}
}
?>
<?php ob_end_flush();?>
