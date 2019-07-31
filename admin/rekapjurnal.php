<?php
$result = tampilEkstra();

 ?>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 col-sm-6 col-xs-4">
      <h4 class="modal-title" id="myModalLabel"><span class="fa fa-share-square-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp; Rekap Jurnal Hari Ini</h4>
			<hr>

      <form action="search.php" class="form-horizontal" method="get">
        <div class="form-group">
          <label class="control-label col-md-3" for="pwd">Ekstrakurikuler</label>
          <div class="col-md-5">
            <select class="form-control" id="nama_ekstra" name="nama_ekstra">
              <option>Pilih Ekstra...</option>
              <?php while ($row=mysqli_fetch_assoc($result)) { ?>
              <option><?php echo $row['kode_ekstra']; ?></option>
            <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-offset-3 col-md-9">
            <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-search" aria-hidden="true"></i> lihat</button>
          </div>
        </div>
      </form>

      <hr>
          <p style="font-size: 12px;"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Pilih Ekstrakurikuler yang akan dilihat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  </div>
  </div>
</div>
