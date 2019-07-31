<?php
require_once ('../view/templates/header.php');
require_once ('../core/init.php');
$result = tampilJurnal();
?>
			<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="../app/index.php">Jurnal & Presensi Online</a></li>
											<li class="active"><a href="#">Rekap Jurnal</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
<?php require_once('../view/templates/side-menu.php') ?>
            <div class="col-md-9">
              <br>

							<div class="alert alert-info alert-dismissable">
					 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									Lihat Rekap Jurnal, </strong> Silakan pilih tanggalnya
			 </div>
         <!-- Area Form Search Kegiatan -->
				 <div class="panel panel-info">
				   <div class="panel-heading">
				     <h3 class="panel-title">Pilih Rekap Jurnal Ekstra</h3>
				   </div>
				   <div class="panel-body">
						 <form class="form-horizontal" method="post">
                   <div class="form-group">
                     <label class="control-label col-md-3" for="pwd">Ekstrakurikuler</label>
                     <div class="col-md-5">
           <select class="form-control" name="nama_ekstra">
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

                   <div class="form-group"e>
                   <label class="control-label col-md-3" for="datetime">Hari/Tanggal</label>

                     <div class="form-group" >
                       <div class="col-md-3">
                         <div class="datepicker-center">
                           <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                             <input name="hari_tanggal" class="form-control" type="text" name="tgl_regis"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
         <div class="form-group">
                 <div class="col-md-offset-3 col-md-9">
                 <a href="rekap_jurnal.php?nama_ekstra"><button name="lihat" type="button" class="btn btn-xs btn-primary"><i class="fa fa-search" aria-hidden="true"></i> lihat</button>
								 <a href="input_jurnal.php"><button name="tambah" type="button" class="btn btn-xs btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Jurnal</button></a>
                 </div>
                 </div>
 							</form>
       <!-- Akhir Area Form Input Kegiatan -->
				   </div>
				 </div>


              <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-print" aria-hidden="true"></i> Cetak </button>


              <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">

               <br>
                <table id="data_jurnal" class="table table-responsive">
                  <thead>
                    <tr>
                      <th class="text-left">No</th>
											<th claas="text-left">Nama Ekstra</th>
                      <th class="text-left">Hari/Tanggal </th>
                      <th class="text-left">Pembina/Pelatih</th>
											<th class="text-left">Materi</th>
                      <th class="text-left">Keterangan</th>
											<th class="text-left">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
											<?php
											$no=1;
											//while($rows=mysql_fetch_object($result)){
											while ($row = mysqli_fetch_assoc($result)) {
												?>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $row['kode_ekstra'] ?></td>
											<td><?php echo $row['hari_tanggal'] ?></td>
                      <td><?php echo $row['kode_pem']?></td>
                      <td><?php echo $row['materi']?></td>
                      <td><?php echo $row['keterangan']?></td>
											<td><a href="edit-jurnal.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
												  <a href="delete-jurnal.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></a></td>
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
