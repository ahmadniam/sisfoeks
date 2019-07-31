<?php
require_once ('../view/templates/header.php');
if(isset($_POST['simpan'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  if(!empty(trim($username)) && !empty(trim($password))    && !empty(trim($level)) ){

        if(cekTambahUser($username) ) {
                //memasukkan user ke database
                    if(tambahUser($username,$password,$level='siswa')){
                      header('location: #identitas');
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

$result=tampilUser()
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
              <br>
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Tambah User Baru</h3>
        </div>
        <div class="panel-body">

          <!-- Area Form Input Kegiatan -->

            <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#userakun">User Akun</a></li>
  <li><a data-toggle="tab" href="#identitas">Identitas User</a></li>
</ul>

<div class="tab-content">
  <div id="userakun" class="tab-pane fade in active">
    <br><h4>
    <label class="label label-primary">Tambah User Akun</label>
  </h4><hr>
    <form class="form-horizontal" action="#identitas" method="post">

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


  </div>
  <div id="identitas" class="tab-pane fade">
    <br><h4>
    <label class="label label-primary">Isikan Identitas Siswa !</label>
    </h4><hr>
    <form class="form-horizontal" action="" method="post">


            <div class="form-group">
            <label class="control-label col-md-3" for="id_user">id_user</label>
            <div class="col-md-6">
              <select class="form-control" name="id_user">
                <?php $row=mysqli_fetch_assoc($result) ?>
                <option><?php echo $row['id_user']; ?></option>

              </select>
            </div>
            </div>

          <div class="form-group">
            <label class="control-label col-md-3" for="nis">NIS</label>
            <div class="col-md-6">
          <input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa...">
          </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3" for="nama siswa">Nama Siswa</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap..">
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3" for="kelas">Kelas</label>
          <div class="col-md-6">
          <select class="form-control" name="kelas">
            <option>X</option>
            <option>XI</option>
            <option>XII</option>
          </select>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3" for="kelas">Jurusan</label>
          <div class="col-md-6">
          <select class="form-control" name="jurusan">
            <option>TGB 1</option>
            <option>TGB 2</option>
            <option>TGB 3</option>
            <option>TAV 1</option>
            <option>TAV 2</option>
            <option>EIN 1</option>
            <option>EIN 2</option>
            <option>TITL 1</option>
            <option>TITL 2</option>
            <option>TPM 1</option>
            <option>TPM 2</option>
            <option>TKR 1</option>
            <option>TKR 2</option>
            <option>TSM 1</option>
            <option>TSM 2</option>
            <option>MM 1</option>
            <option>MM 2</option>
          </select>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3" for="jenis akun">Ektra Yang Diikuti</label>
          <div class="col-md-6">
          <input type="text" class="form-control" name="kode_ekstra">
          </div>
          </div>

        <div class="form-group">
        <div class="col-md-offset-3 col-md-9">
        <input type="submit" value="SIMPAN" class="btn btn-sm btn-primary" name="simpan"></input>
        </div>
        </div>
      </form>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

            <!-- Akhir Area Form Input Kegiatan -->
        </div>
      </div>

      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Form Import Data</h3>
        </div>
        <div class="panel-body">
          <a href="../app/index.php" class="btn btn-danger pull-right">
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
