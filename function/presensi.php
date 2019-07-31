<?php
function lihatPresensi(){
  global $link;

   $query = "SELECT * FROM kehadiran_siswa ORDER BY hari_tanggal DESC ";
   $query2= "SELECT data_siswa.nis, kehadiran_siswa.kode_ekstra, data_siswa.nama_siswa, data_siswa.kelas, data_siswa.jurusan, keterangan
   FROM data_siswa LEFT JOIN kehadiran_siswa USING (nis) ";

   $result = mysqli_query($link, $query2) or die('tampil query gagal');
    return $result;
}
function tampilkanPresensiSiswa(){
  global $link;

  $query = "SELECT * FROM data_siswa WHERE kode_ekstra='pramuka' ORDER BY nis ASC ";
  $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}


function inputPresensiSiswa ($kode_ekstra,$hari_tanggal,$nis,$keterangan){
  global $link;

  $query = "INSERT INTO kehadiran_siswa (kode_ekstra,hari_tanggal,nis,keterangan)
            VALUES ('$kode_ekstra','$hari_tanggal','$nis','$keterangan')";

  if(mysqli_query($link, $query) or die ('input presensi gagal')){
    return true;
  }else{
    echo "gagal";;
  }
}
 ?>
