<?php
require_once ('../view/templates/header.php');
$result=tampilEkstra();
$result2=tampilPembina();
if(isset($_POST['simpan'])){

  if(tambahJurnal($_POST['kode_ekstra'],$_POST['hari_tanggal'],$_POST['kode_pembina'],
                  $_POST['materi'],$_POST['keterangan'])){
    header ('location: index.php?u=kelolajurnal');

  }else{
    echo 'tambah jurnal gagal';
  }
}

?>

<div class="panel panel-default">
  <div class="panel-body">

    <div class="col-md-12 col-sm-6 col-xs-4">
      <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Tambah Jurnal Kegiatan</h4>
      <hr>

      <ul class="nav nav-pills">
          <li><a href="index.php?u=kelolajurnal"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;&nbsp;Kelola Jurnal</a></li>
          <li><a href="index.php?u=tambahjurnal"><span class="glyphicon glyphicon-th-large"></span>&nbsp;&nbsp;&nbsp;Tambah Jurnal</a></li>

      </ul>

      <br>
      <div class="panel panel-default">
      <div class="panel-body">

      <!-- Area Form Input Kegiatan -->
      <h4><label class="label label-primary">Input Jurnal kegiatan !</label></h4>
      <br>
      <form class="form-horizontal" action="" method="post">
      <div class="form-group">
      <label class="control-label col-md-3" for="pwd">Ekstrakurikuler</label>
      <div class="col-md-5">
      <select  class="form-control" name="kode_ekstra">
        <option>Pilih Ekstrakurikuler...</option>
      <?php while ($row=mysqli_fetch_assoc($result)) {?>
      <option><?php echo $row['kode_ekstra']; ?></option>
      <?php } ?>
      </select>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-md-3" for="datetime">Hari/Tanggal</label>

      <div class="form-group" >
      <div class="col-md-4 col-xs-6">

      <div class="datepicker-center" >
      <div class="input-group date" data-date="" data-date-format="dd-mm-yyyy">
      <input name="hari_tanggal" value="<?php $tgl=date('l, d-m-Y');echo $tgl;?>" class="form-control" type="text"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      </div>
      </div>

      <!--<input disabled class="form-control" name="hari_tanggal" value=""></input>-->
      </div>
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3" for="Pelatih/Pembina">Pembina/Pelatih</label>
          <div class="col-md-6">
            <select class="form-control" name="kode_pembina">
              <option>Pilih Pembina/Pelatih...</option>
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
          <textarea class="form-control" name="keterangan" rows="4"></textarea>
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
  </div>
</div>
