<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');

if(isset($_GET['id'])){

  if(hapusJurnal($_GET['id'])){
    header ('location: rekap_jurnal.php');

  }else{
    echo 'hapus jurnal gagal';
  }
}

 ?>
