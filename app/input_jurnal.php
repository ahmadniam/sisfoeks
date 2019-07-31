<?php
require_once ('../view/templates/header.php');
$result=tampilEkstra();
$result2=tampilPembina();
if(isset($_POST['simpan'])){

  if(tambahJurnal($_POST['kode_ekstra'],$_POST['hari_tanggal'],$_POST['kode_pembina'],
                  $_POST['materi'],$_POST['keterangan'])){
    header ('location: rekap_jurnal.php');

  }else{
    echo 'tambah jurnal gagal';
  }
}

 ?>

				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="../app/index.php">Jurnal & Presensi Online</a></li>
					<li class="active"><a href="#">Input Jurnal</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php
require_once('../view/templates/side-menu.php')
 ?>
 <br>
            <div class="col-md-9">

            <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Input Jurnal Harian !</strong>
			</div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Input Jurnal Kegiatan</h3>
              </div>
              <div class="panel-body">

                <!-- Area Form Input Kegiatan -->

                <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3" for="pwd">Kode Ekstra</label>
                        <div class="col-md-5">
                        <select  class="form-control" name="kode_ekstra">
                          <?php while ($row=mysqli_fetch_assoc($result)) {?>
                            <option><?php echo $row['kode_ekstra']; ?></option>
                          <?php } ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="datetime">Hari/Tanggal</label>

                        <div class="form-group" >
                          <div class="col-md-3 col-xs-6">
                            <div class="datepicker-center">
                              <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                <input name="hari_tanggal" class="form-control" type="text"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3" for="Pelatih/Pembina">Pembina/Pelatih</label>
                      <div class="col-md-6">
                        <select class="form-control" name="kode_pembina">
                          <?php while ($row = mysqli_fetch_assoc($result2)) {?>
                            <option><?php echo $row['kode_pembina'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3" for="materi">Materi</label>
                      <div class="col-md-6">
                      <textarea class="form-control" rows="2" name="materi"></textarea>
                      </div>
                      </div>



              <div class="form-group">
                      <label class="control-label col-md-3" for="keterangan">Keterangan</label>
                      <div class="col-md-6">

                      <select class="form-control" name="keterangan">
                            <option>Selesai</option>
                            <option>Dilanjutkan Pertemuan Berikutnya</option>
                            <option>lainnya</option>
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
