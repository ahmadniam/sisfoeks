<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');


if(isset($_POST['simpan'])){

  if(tambahSiswa($_POST['nis'],$_POST['id_user'],$_POST['nama_siswa'],$_POST['kelas'],
  $_POST['jurusan'],$_POST['kode_ekstra'])){

    header ('location: data_siswa.php');
  }else{
    echo 'tambah siswa gagal';
  }
}

$result = tampilUser();
 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Tambah Siswa</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php require_once ('../view/templates/side-menu.php') ?>
            <div class="col-md-9">

<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
          <div class="alert alert-warning alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Tambah Siswa !
			</div>


      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Tambah Siswa Baru</h3>
        </div>
        <div class="panel-body">

          <!-- Area Form Input Kegiatan -->

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
            <!-- Akhir Area Form Input Kegiatan -->
        </div>
      </div>


                <div class="row">

                </div>
              </div>

            </div>
          <br><br>
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
