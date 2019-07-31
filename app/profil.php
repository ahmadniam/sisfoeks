<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');

if(!isset($_SESSION['username'])) {
  header ('location: ../auth/index.php');
}
$result=tampilDetail();
$result2= tampilUser();
 ?>

				<ol class="breadcrumb">
                    <li><a href="../app/index.php">Beranda</a></li>
                    <li class="active">Profil</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<!-- load judul, menu sidebar-->
<?php require_once('../view/templates/side-menu.php') ?>


    <div class="col-md-9">
      <div class="profile-content">
        <h4><strong>Selamat Datang</strong> <span class="label label-primary"><?php  echo $_SESSION['username']; ?> !</span></h4>
        <hr><div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Edit Profil Anda</h3>
          </div>
          <div class="panel-body">
            <?php while ($row=mysqli_fetch_assoc($result)){ ?>
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" value="<?php echo $row['nama_siswa']?>">
              </div>
              <div class="form-group">
                <label>NIS</label>
                <input type="text" class="form-control" value="<?php echo $row['nis']?>">
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <input type="text" class="form-control" value="<?php echo $row['kelas']?>">
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" value="<?php echo $row['jurusan']?>">
              </div>
          </form>
          <?php } ?>
          <?php $row2=mysqli_fetch_assoc($result2)?>
          <hr>
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" disabled value="<?php echo $row2['username']?>">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" value="<?php echo $row2['password']?>">
            </div>
          </form>
          <button class="btn btn-info" type="submit" name="button">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>


        </div>
<!--//doc-wrapper-->
<?php
require_once('../view/templates/footer.php');
 ?>
