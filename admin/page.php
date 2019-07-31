<?php

if (!empty($_GET['u'])){

if($_GET['u'] == "home"){
?>

<?php include_once('home.php'); ?>

<?php
} else if ($_GET['u'] == "KelolaUser"){
?>

<?php include_once('kelola_user.php'); ?>

<?php
} else if ($_GET['u'] == "tambahadmin"){
?>

<?php include_once('tambahadmin.php'); ?>

<?php
} else if ($_GET['u'] == "tambahpembina"){
?>

<?php include_once('tambahpembina.php'); ?>

<?php
} else if ($_GET['u'] == "tambahsiswa"){
?>

<?php include_once('tambahsiswa.php'); ?>

<?php
} else if ($_GET['u'] == "tambahuser"){
?>

<?php include_once('tambahuser.php'); ?>

<?php
} else if ($_GET['u'] == "editadmin"){
?>

<?php include_once('editadmin.php'); ?>

<?php
} else if ($_GET['u'] == "edituser"){
?>

<?php include_once('edituser.php'); ?>

<?php
} else if ($_GET['u'] == "KelolaKoleksi"){
?>

<?php include_once('kelola_koleksi.php'); ?>

<?php
} else if ($_GET['u'] == "LihatRekapJurnal"){
?>

<?php include_once('lihatrekapjurnal.php'); ?>


<?php
} else if ($_GET['u'] == "tambahkategori"){
?>

<?php include_once('tambahkategori.php'); ?>

<?php
} else if ($_GET['u'] == "editkoleksi"){
?>

<?php include_once('editkoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "LihatKoleksi"){
?>

<?php include_once('lihat_koleksi.php'); ?>

<?php
} else if ($_GET['u'] == "tambahkoleksi"){
?>

<?php include_once('tambahkoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "detailkoleksi"){
?>

<?php include_once('tambahdetailkoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "KategoriKoleksi"){
?>

<?php include_once('kategorikoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "DetailKoleksi"){
?>

<?php include_once('lihatdetailkoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "SemuaKoleksi"){
?>

<?php include_once('lihatsemuakoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "share"){
?>

<?php include_once('share.php'); ?>

<?php
} else if ($_GET['u'] == "share2"){
?>

<?php include_once('share2.php'); ?>

<?php
} else if ($_GET['u'] == "MyKoleksi"){
?>

<?php include_once('mykoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "Jurnal"){
?>

<?php include_once('jurnal.php'); ?>


<?php
} else if ($_GET['u'] == "editmykoleksi"){
?>

<?php include_once('editmykoleksi.php'); ?>

<?php
} else if ($_GET['u'] == "GuestBook"){
?>

<?php include_once('guestbook.php'); ?>

<?php
} else if ($_GET['u'] == "Koleksi"){
?>

<?php include_once('lihatkoleksipublish.php'); ?>

<?php
} else if ($_GET['u'] == "Pengaturan"){
?>

<?php include_once('pengaturan.php'); ?>


<?php
} else if ($_GET['u'] == "tambahjurnal"){
?>

<?php include_once('tambahjurnal.php'); ?>

<?php
} else if ($_GET['u'] == "kelolajurnal"){
?>

<?php include_once('kelolajurnal.php'); ?>

<?php
} else if ($_GET['u'] == "rekapjurnal"){
?>

<?php include_once('rekapjurnal.php'); ?>



<?php
} else if ($_GET['u'] == "editjurnal"){
?>

<?php include_once('editjurnal.php'); ?>


<?php
} else if ($_GET['u'] == "AllKoleksi"){
?>

<?php include_once('allkoleksi.php'); ?>

<?php
}
}
?>
