<?php
require_once('../view/templates/header.php');
require_once('../core/init.php');
if(isset($_POST['simpan'])){
  if(inputPresensiSiswa($_POST['kode_ekstra'],$_POST['hari_tanggal'],$_POST['nis'],$_POST['keterangan'])){

    header ('location: rekap_kehadiran_siswa.php');
  }else{
    echo 'tambah siswa gagal';
  }
}
$result = tampilkanPresensiSiswa();

 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active"><a href="#">Input Kehadiran Peserta</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
<?php
require_once('../view/templates/side-menu.php')
 ?>

            <div class="col-md-9">
<br>
            <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Input Kehadiran</strong> siswa !
			</div>

            <!-- Area Form Input Kegiatan -->

            <form class="form-horizontal" method="post">
                  <div class="form-group">
                    <label class="control-label col-md-3" for="pwd">Nama Ekstra</label>
                    <div class="col-md-5">
					<select class="form-control" id="ekstrakurikuler">
                        <option>Pramuka</option>
                        <option>PMR</option>
                        <option>Paskibra</option>
                        <option>Volley</option>
                        <option>Basket</option>
                        <option>Rebana</option>
                        <option>Band</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-md-3" for="Pelatih/Pembina">Pembina/Pelatih</label>
                  <div class="col-md-6">
                  <input type="text" class="form-control" id="pembina">
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-md-3" for="datetime">Hari/Tanggal</label>

                    <div class="form-group" >
                      <div class="col-md-3">
                        <div class="datepicker-center">
                          <div class="input-group date" data-date="" data-date-format="dd-mm-yyyy">
                            <input class="form-control" type="text" name="tgl_regis"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

</form>

			<!-- Akhir Area Form Input Kegiatan -->



              <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
               <br>
                <form  action="" method="post">
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama Peserta</th>
                      <th>Hadir</th>
                      <th>Izin</th>
                      <th>Sakit</th>
                      <th>Alfa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row=mysqli_fetch_assoc($result)) { ?>
                    <tr>
                      <td name="nis"><?php echo $row['nis'] ?></td>
                      <td name="nama_siswa"><?php echo $row['nama_siswa'] ?></td>
                      <td name="keterangan"><input type="checkbox" value=""></td>
                      <td name="keterangan"><input type="checkbox" value=""></td>
                      <td name="keterangan"><input type="checkbox" value=""></td>
                      <td name="keterangan"><input type="checkbox" value=""></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
<input type="submit" name="simpan" class="btn btn-primary"value="SIMPAN">
                </form>
                <div class="row">
                <div class="form-group">
                <div class="col-md-offset-3 col-md-9">

                </div>
                </div>
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
