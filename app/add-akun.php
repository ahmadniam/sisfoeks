<?php
require_once ('../view/templates/header.php');

if(isset($_POST['simpan'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  if(!empty(trim($username)) && !empty(trim($password))    && !empty(trim($level)) ){

        if(cekTambahUser($username) ) {
                //memasukkan user ke database
                    if(tambahUser($username,$password,$level=['siswa'])){
                      header('location:add-siswa.php');
                      //echo 'input user berhasil';
                    } else{
                      echo "gagal input cuy";
                    }
                  }else {
                  echo "username already exist";
                }
   } else {
    echo "tidak boleh kosong ya";
  }
}
 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Manajemen Akun</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php require_once ('../view/templates/side-menu.php') ?>
            <div class="col-md-9">
              <h3>Manajemen Akun</h3><br>
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
          <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Tambah akun !
			</div>


      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Tambah User Baru</h3>
        </div>
        <div class="panel-body">

          <!-- Area Form Input Kegiatan -->

          <form class="form-horizontal" action="" method="post">

                <div class="form-group">
                <label class="control-label col-md-3" for="username">username</label>
                <div class="col-md-6">
                <input type="text" class="form-control" name="username">
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-md-3" for="password">password</label>
                <div class="col-md-6">
                <input type="password" class="form-control" name="password">
                </div>
                </div>

                <!--<div class="form-group">
                <label class="control-label col-md-3" for="nama lengkap">nama lengkap</label>
                <div class="col-md-6">
                <input type="text" class="form-control" name="nama_lengkap">
                </div>
              </div> -->

                <div class="form-group">
                <label class="control-label col-md-3" for="jenis akun">jenis akun</label>
                <div class="col-md-6">
                <select class="form-control" name="level">
                  <option>siswa</option>
                  <option>pembina</option>
                </select>
                </div>
                </div>

              <div class="form-group">
              <div class="col-md-offset-3 col-md-9">
              <input type="submit" value="SIMPAN" class="btn btn-sm btn-primary" name="simpan"></input>
              </div>
              </div>
            </form>
            <!-- Akhir Area Form Input Kegiatan -->
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Form Import Data</h3>
        </div>
        <div class="panel-body">
          <a href="index.php" class="btn btn-danger pull-right">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </a>
          <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
          <form method="post" enctype='multipart/form-data' action="" enctype="multipart/form-data">
            <a href="../Format.csv" class="btn btn-default">
              <span class="glyphicon glyphicon-download"></span>
              Download Format
            </a><br><br>

            <input type="file" name="filename" class="pull-left">

            <button type="submit" name="submit" class="btn btn-success btn-sm">
              <span class="glyphicon glyphicon-upload"></span> Upload
            </button>
          </form>

        </div>
      </div>

            </div>

          </div>
        </div>
<!--//doc-wrapper-->
        <br><br>
        <div id="promo-block" class="promo-block">
          <div class="container"></div>
          <!--//container-->
        </div><!--//promo-block-->

    </div>
<!--//page-wrapper-->
<?php
require_once('../view/templates/footer.php')
 ?>
