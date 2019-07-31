<?php

//function tampil seluruh data user
function tampilUser(){
  global $link;

  $query = "SELECT * FROM users ORDER BY id_user DESC";

  $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}

function tampilUserperid(){
  global $link;
   $query = "SELECT * FROM users WHERE id_user=$id ";
   $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}

function tambahUser($username,$password,$email,$firstname,$lastname,$studentid,$kelas,$jurusan,$level){
  global $link;

  //mencegah sql injection
  $username = mysqli_real_escape_string($link,$username);
  $password = mysqli_real_escape_string($link,$password);
  //akhir mencegah sql injection

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,password,email,firstname,lastname,studentid,kelas,jurusan,level)
            VALUES ('$username','$password','$level')";

  if(mysqli_query($link, $query) or die ('tambah user gagal')){
    return true;
  }else{
    echo "gagal";
  }
}

function tambahAdmin($username,$password,$email,$firstname,$lastname,$level){
  global $link;

  //mencegah sql injection
  $username = mysqli_real_escape_string($link,$username);
  $password = mysqli_real_escape_string($link,$password);
  //akhir mencegah sql injection

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,password,email,firstname,lastname,level)
            VALUES ('$username','$password','$email','$firstname','$lastname','$level')";

  if(mysqli_query($link, $query) or die ('tambah user gagal')){
    return true;
  }else{
    echo "gagal";;
  }
}

function tambahakunSiswa($username,$password,$email,$firstname,$studentid,$kelas,$jurusan,$level){
  global $link;

  //mencegah sql injection
  $username = mysqli_real_escape_string($link,$username);
  $password = mysqli_real_escape_string($link,$password);
  //akhir mencegah sql injection

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,password,email,firstname,studentid,kelas,jurusan,level)
            VALUES ('$username','$password','$email','$firstname','$studentid','$kelas','$jurusan','$level')";

  if(mysqli_query($link, $query) or die ('tambah user gagal')){
    return true;
  }else{
    echo "gagal";;
  }
}


function tambahakunPembina($username,$password,$email,$firstname,$lastname,$studentid,$level){
  global $link;

  //mencegah sql injection
  $username = mysqli_real_escape_string($link,$username);
  $password = mysqli_real_escape_string($link,$password);
  //akhir mencegah sql injection

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,password,email,firstname,lastname,studentid,level)
            VALUES ('$username','$password','$email','$firstname','$lastname','$studentid','$level')";

  if(mysqli_query($link, $query) or die ('tambah user gagal')){
    return true;
  }else{
    echo "gagal";;
  }
}

//menguji username yang kembar
function cekTambahUser($username){
  global $link;
  $username = mysqli_real_escape_string($link,$username);

  $query = "SELECT * FROM users WHERE username= '$username'";

  if($result= mysqli_query($link, $query)) {
    if(mysqli_num_rows($result) == 0) return true;
    else return false;
  }
}

//menguji username untuk login
function loginCek($username){
  global $link;
  $username = mysqli_real_escape_string($link,$username);

  $query = "SELECT * FROM users WHERE username='$username'";

  if($result= mysqli_query($link, $query)) {
    if(mysqli_num_rows($result) != 0) return true;
    else return false;
  }
}

//menguji login
function cekUser($username,$password){
  global $link;
  //mencegah sql injection
  $username = mysqli_real_escape_string ($link, $username);
  $password = mysqli_real_escape_string ($link, $password);
  //akhir mencegah sql injection
  $query = "SELECT password FROM users WHERE username ='$username'";
  $result = mysqli_query ($link, $query);
  $hash = mysqli_fetch_assoc($result)['password'];
  if(password_verify($password, $hash)) {
    return true;
  }
  else{
    return false;
  }
}
// user_details
function tampilDetail(){
  global $link;
  $query = "SELECT * FROM data_siswa  ORDER BY id_user DESC";
  $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}

function tampilDetailperId($id){
  global $link;
 $query = "SELECT * FROM jurnal_kegiatan WHERE id=$id ";
 $query = "SELECT * FROM data_siswa WHERE nis='$nis' ORDER BY id_user DESC";
  return $result;
}

function editakunAdmin($password, $email, $firstname,$lastname, $id){
  global $link;
  $query = "UPDATE users SET password='$password', email='$email', firstname='$firstname', lastname='$lastname'
            WHERE id_user = $id";
  if(mysqli_query($link, $query) or die ('edit akun  gagaaaaaal')){
    return true;
  }else{
    echo "ada masalah padasaat edit";;
  }
}

?>
