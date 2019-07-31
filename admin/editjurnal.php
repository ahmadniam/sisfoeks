<?php
if(isset($_POST['update'])){

  if(editJurnal($_POST['hari_tanggal'],
                  $_POST['materi'],$_POST['keterangan'],$_GET['id'])){
    header ('location: index.php?u=kelolajurnal');
  }else{
    echo 'edit jurnal gagal';
  }
}

$result = tampilJurnalperId($_GET['id']);
while ($row = mysqli_fetch_assoc($result)) {;
 ?>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 col-sm-6 col-xs-4">

                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Jurnal Kegiatan</h4>
                <hr>

								<ul class="nav nav-pills">
										<li><a href="index.php?u=kelolajurnal"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;&nbsp;Kelola Jurnal</a></li>
										<li><a href="index.php?u=tambahjurnal"><span class="glyphicon glyphicon-th-large"></span>&nbsp;&nbsp;&nbsp;Tambah Jurnal</a></li>
								</ul>
        <br>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <p>Edit Jurnal</p>
    </div>

    <div class="panel-body">
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
		</div>
	</div>
</div>
</div>
</div>
