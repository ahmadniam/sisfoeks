<?php
require_once ('../view/templates/header.php');
require_once ('../core/init.php');
$result = lihatPresensi();
?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="index.php">Jurnal & Presensi Online</a></li>
					<li class="active"><a href="#">Rekap Kehadiran Siswa</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
<?php require_once('../view/templates/side-menu.php') ?>
            <div class="col-md-9">
              <br>
            <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Rekap Kehadiran</strong> siswa !
			</div>
       <!-- Area Form Input Kegiatan -->
            <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-md-3" for="pwd">Ekstrakurikuler</label>
                    <div class="col-md-5">
          <select class="form-control" name="ekstrakurikuler">
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
                  <input type="text" class="form-control" name="pembina">
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

              <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-search" aria-hidden="true"></i>lihat</button>
                </div>
                </div>



              </form>


      <!-- Akhir Area Form Input Kegiatan -->




                   <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>


              <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
               <br>
                <table class="table table-responsive">
                  <thead>
                    <tr>
											<th>Ekstra</th>
                      <th>NIS</th>
                      <th>Nama Peserta</th>
											<th>Kelas</th>
											<th>Jurusan</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
										<hr>
                    <tr><?php
											while ($row = mysqli_fetch_assoc($result)) {
												?>
											<td><?php echo $row['kode_ekstra']; ?></td>
                      <td><?php echo $row['nis'] ?></td>
                      <td><?php echo $row['nama_siswa'] ?></td>
                      <td><?php echo $row['kelas']; ?></td>
                      <td><?php echo $row['jurusan']; ?></td>
											<td><?php echo $row['keterangan'] ?></td>
                    </tr>
									<?php } //endwhile ?>
                  </tbody>
                </table>
                <div class="row">

                </div>
              </div>

            </div>
          <br><br>
          </div>
        </div>
<!--//doc-wrapper-->
<?php require_once('../view/templates/footer.php') ?>
