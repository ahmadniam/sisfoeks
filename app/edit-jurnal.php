<?php
require_once ('../view/templates/header.php');
require_once ('../core/init.php');

if(isset($_POST['update'])){

  if(editJurnal($_POST['hari_tanggal'],
                  $_POST['materi'],$_POST['keterangan'],$_GET['id'])){
    header ('location: rekap_jurnal.php');

  }else{
    echo 'edit jurnal gagal';
  }
}

$result = tampilJurnalperId($_GET['id']);
while ($row = mysqli_fetch_assoc($result)) {;
 ?>

				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active"><a href="#">Edit Jurnal</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php
require_once('../view/templates/side-menu.php')
 ?>
 <br>
            <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Jurnal Kegiatan</h3>
              </div>
              <div class="panel-body">

                <!-- Area Form Input Kegiatan -->

                <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3" for="pwd">Nama Ekstra</label>
                        <div class="col-md-5">

                        <input type="text" class="form-control" disabled name="kode_ekstra" value="<?php echo $row['kode_ekstra']; ?>">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="datetime">Hari/Tanggal</label>

                        <div class="form-group" >
                          <div class="col-md-3 col-xs-6">
                            <div class="datepicker-center">
                              <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                <input name="hari_tanggal" value="<?php echo $row['hari_tanggal']; ?>" class="form-control" type="text"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3" for="Pelatih/Pembina">Pembina/Pelatih</label>
                      <div class="col-md-6">
                      <input type="text" class="form-control" disabled name="kode_pembina" value="<?php echo $row['kode_pembina']; ?>">
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3" for="materi">Materi</label>
                      <div class="col-md-6">
                      <textarea class="form-control" rows="5" name="materi"><?php echo $row['materi']; ?></textarea>
                      </div>
                      </div>



              <div class="form-group">
                      <label class="control-label col-md-3" for="keterangan">Keterangan</label>
                      <div class="col-md-6">

                      <select class="form-control" name="keterangan" value="<?php echo $row['hari_tanggal']; ?>">
                            <option>Selesai</option>
                            <option>Dilanjutkan Pertemuan Berikutnya</option>
                            <option>lainnya</option>
                      </select>
                      </div>
                      </div>
<?php } //endwhile ?>
                    <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                    <input type="submit" value="SIMPAN" class="btn btn-sm btn-primary" name="update"></input>
                    </div>
                    </div>
                  </form>
                  <!-- Akhir Area Form Input Kegiatan -->
              </div>
            </div>
            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">



                <div class="row">
                </div>
              </div>

            </div>
          <br><br>
          </div>
        </div>
<!--//doc-wrapper-->
<?php
require_once('../view/templates/footer.php')
 ?>
