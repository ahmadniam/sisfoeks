<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');

if(isset($_GET['nis'])){

  if(hapusSiswa($_GET['nis'])){
    header ('location: data_siswa.php');

  }else{
    echo 'hapus siswa gagal';
  }
}

 ?>
