<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');

if(!isset($_SESSION['id_user'])) {
  header ('location: ../app/users.php');
}
 ?>
 <ol class="breadcrumb">
             <li><a href="../index.php">Beranda</a></li>
             <li ><a href="../app/index.php">Jurnal & Presensi Online</a></li>
   <li class="active">Identitas</a></li>
         </ol>
     </div><!--//container-->
 </header><!--//header-->

<?php require_once ('../view/templates/side-menu.php') ?>
     <div class="col-md-9">
       <br>
       <div class="panel panel-default">
         <div class="panel-heading">
           <h3 class="panel-title">Identitas</h3>
         </div>
         <div class="panel-body">
          <h4>
          <label class="label label-primary">Lengkapi Profil User !</label>
          </h4><hr>
          <form class="form-horizontal" action="" method="post">
                  <div class="form-group">
                  <label class="control-label col-md-3" for="id_user">id_user</label>
                  <div class="col-md-6">
                    <select class="form-control" name="<?php echo $_SESSION['id_user']; ?>">
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
       </div>

     </div>
