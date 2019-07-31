<?php
include "../db/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$studentid = $_POST['studentid'];
$level = 'siswa';
mysqli_query($con, "INSERT INTO users (username,password,firstname,lastname,email,studentid,level) VALUES ('$username','$password','$firstname','$lastname','$email','$studentid','$level')");
header('location:index.php?u=KelolaUser');
?>
