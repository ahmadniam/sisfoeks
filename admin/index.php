<?php
require_once ('../core/init.php');
if(!isset($_SESSION['username'])) {
  header ('location: ../auth/index.php');
}
$page ='index';
?>
<html lang="en">
<head>
    <title>::: Jurnal dan Presensi Online :::</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ahmad Niam">
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css">

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
  <body>

    <?php include_once('../view/templates/header.php'); ?>
    <div class="container" style="min-height: 515px; margin-top: 10px;">
        <div class="col-md-3">
            <?php include_once('../view/templates/side-menu.php'); ?>
            <?php include_once('../view/templates/side-menu-jurnal.php'); ?>
        </div>
        <div class="col-md-9">
            <?php include_once('page.php'); ?>
        </div>
    </div>
    <?php include_once('../view/templates/footer.php'); ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php ob_end_flush();?>
