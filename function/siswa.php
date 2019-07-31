<?php

function tampilSiswa(){
  global $link;

  $query = "SELECT * FROM data_siswa ORDER BY nis ASC";
  $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}

function hapusSiswa($nis){
  global $link;
  $query = "DELETE FROM data_siswa WHERE nis=$nis";
  if(mysqli_query($link, $query) or die ('hapus siswa data gagal')){
    return true;
  }else{
    return false;
  }
}

function tambahSiswa($nis,$id_user, $nama_siswa, $kelas, $jurusan, $kode_ekstra){
  global $link;

  //mencegah sql injection
  $nis = mysqli_real_escape_string($link,$nis);
  $nama_siswa = mysqli_real_escape_string($link,$nama_siswa);
  $kelas = mysqli_real_escape_string($link,$kelas);
  //akhir mencegah sql injection

  $query = "INSERT INTO data_siswa (nis,id_user,nama_siswa,kelas,jurusan,kode_ekstra)
            VALUES ('$nis','$id_user','$nama_siswa','$kelas','$jurusan','$kode_ekstra')";

  if(mysqli_query($link, $query) or die ('tambah siswa gagal')){
    return true;
  }else{
    echo "gagal";;
  }
}
