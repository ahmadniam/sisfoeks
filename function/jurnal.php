<?php
function cari(){
  global $link;
  $query = "SELECT * FROM jurnal_kegiatan WHERE kode_ekstra = '$nama_ekstra' ";
  $result = mysqli_query($link, $query) or die ('tampil query gagal');
  return $result;

}

function tambahJurnal($kode_ekstra,$hari_tanggal, $kode_pembina, $materi, $keterangan){
  global $link;
  $query = "INSERT INTO jurnal_kegiatan (kode_ekstra,hari_tanggal,kode_pembina,materi,keterangan)
            VALUES ('$kode_ekstra','$hari_tanggal','$kode_pembina','$materi','$keterangan')";
  if(mysqli_query($link, $query) or die ('tambah jurnal data gagal')){
    return true;
  }else{
    return false;
  }
}


function tampilJurnal(){
  global $link;
  //  PR : Memfilter  jurnal yang ditampilkan berdasarkan hari_tanggal dan nama_ekstra yang dipilih lewat button search
   $query = "SELECT * FROM jurnal_kegiatan ORDER BY hari_tanggal DESC ";

   $query2 = "SELECT id, kode_ekstra , hari_tanggal , data_pembina.nama_pembina, materi, keterangan
              FROM jurnal_kegiatan
              LEFT JOIN data_pembina ON data_pembina.kode_pembina = jurnal_kegiatan.kode_pembina ORDER BY hari_tanggal DESC";

   $result = mysqli_query($link, $query2) or die('tampil query gagal');
    return $result;
}

function tampilJurnalHarian($nama_ekstra, $tgl){
  global $link;
  //  PR : Memfilter  jurnal yang ditampilkan berdasarkan hari_tanggal dan nama_ekstra yang dipilih lewat button search
   $query = "SELECT * FROM jurnal_kegiatan WHERE kode_ekstra='$nama_ekstra' AND hari_tanggal='$tgl' ORDER BY id DESC";

   $query2 = "SELECT id, kode_ekstra , hari_tanggal , data_pembina.nama_pembina, materi, keterangan
              FROM jurnal_kegiatan
              LEFT JOIN data_pembina ON data_pembina.kode_pembina = jurnal_kegiatan.kode_pembina";

   $result = mysqli_query($link, $query) or die('tampil query gagal');
    return $result;
}


function hapusJurnal($id){
  global $link;
  $query = "DELETE FROM jurnal_kegiatan WHERE id=$id";
  if(mysqli_query($link, $query) or die ('hapus jurnal data gagal')){
    return true;
  }else{
    return false;
  }
}

function tampilJurnalperId($id){
  global $link;
 $query = "SELECT * FROM jurnal_kegiatan WHERE id=$id ";
 $result = mysqli_query($link, $query) or die('tampil query gagal');
  return $result;
}

function editJurnal($hari_tanggal, $materi, $keterangan, $id){
  global $link;
  $query = "UPDATE jurnal_kegiatan SET
            hari_tanggal = '$hari_tanggal',  materi='$materi', keterangan='$keterangan'
            WHERE id =$id";
  if(mysqli_query($link, $query) or die ('edit jurnal  gagaaaaaal')){
    return true;
  }else{
    return false;
  }
}
 ?>
