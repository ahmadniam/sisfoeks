<?php

include "../db/koneksi.php";

$id=$_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$modal=mysqli_query($link, "UPDATE users SET username = '$username',password = '$password',firstname = '$firstname',lastname = '$lastname',email = '$email' WHERE id_user = '$id'");

header('location:index.php?u=KelolaUser');

?>
