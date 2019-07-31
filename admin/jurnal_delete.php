<?php
	include "../db/koneksi.php";
	require ('../function/jurnal.php');
	$id=$_GET['id'];
	$link=$_GET['link'];

	$modal=tampilJurnalperid();

	//$modal=mysqli_query($con, "Delete FROM konten WHERE id='$id'");
?>

<script language="javascript">
                document.location="index.php?u=kelolajurnal&id=<?php echo $link;?>";
            </script>
