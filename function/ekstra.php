<?php
function tampilEkstra(){
  global $link;

  $query = "SELECT * FROM data_ekstra";

  //join tabel data_ekstra dan data_pembina

  $query2= "SELECT data_ekstra.kode_ekstra , data_ekstra.nama_ekstra , data_pembina.nama_pembina FROM
            data_ekstra LEFT JOIN data_pembina ON data_pembina.kode_pembina = data_ekstra.kode_pembina ";

  $result = mysqli_query($link, $query2) or die('tampil query gagal');
  return $result;
}
 ?>
