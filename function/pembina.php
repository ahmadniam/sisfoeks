<?php
function tampilPembina(){
  global $link;

  $query = "SELECT * FROM data_pembina";
  $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}
 ?>
