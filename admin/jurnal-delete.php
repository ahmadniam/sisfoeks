<?php
	include "../db/koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($link, "Delete FROM jurnal_kegiatan WHERE id='$id'");
	header('location:index.php?u=kelolajurnal');
?>
