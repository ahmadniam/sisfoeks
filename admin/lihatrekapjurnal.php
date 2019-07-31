<?php
require_once ('../core/init.php');

  $nama_ekstra = $_GET['nama_ekstra'];
  $tgl=date('d-m-Y');

  //$query = mysqli_query($link, "SELECT * FROM jurnal_kegiatan WHERE kode_ekstra='$nama_ekstra' AND hari_tanggal='$tgl' ORDER BY id DESC");

  $result = tampilJurnalHarian($nama_ekstra,$tgl);
  $judul = mysqli_fetch_assoc($result);

  //pagination config start
  include 'pagination.php';
  $rpp = 5; // jumlah record per halaman
  $reload = "index.php?u=LihatRekapJurnal&pagination=true";
  $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
  $tcount = mysqli_num_rows($result);
  $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
  $count = 0;
  $i = ($page-1)*$rpp;
  $no_urut = ($page-1)*$rpp;
?>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 col-sm-6 col-xs-4">

      <h4 class="modal-title" id="myModalLabel"><span class="fa fa-share-square-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp; Rekap Jurnal Harian</h4>
			<hr>

			<ul class="nav nav-pills">
					<li><a href="index.php?u=kelolajurnal"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;&nbsp;Kelola Jurnal</a></li>
					<li><a href="index.php?u=rekapjurnal"><span class="glyphicon glyphicon-th-large"></span>&nbsp;&nbsp;&nbsp;Rekap Jurnal</a></li>
			</ul>


      <br>

      <form action="ekspor-jurnal.php" method="get">
      <table id="datatable" class="table table-striped table-hover">


        <h4 style="font-size: 14px"><strong>&nbsp;&nbsp;&nbsp;Ekstrakurikuler : <label class="label label-warning"><?php echo $judul['kode_ekstra']; ?></label></strong></h4>
        <hr>

        <input hidden="true" type="text" name="nama_ekstra" value="<?php echo $judul['kode_ekstra'] ?>">
            <thead>
              <tr>
                <th style="font-size: 13px" class="text-center col-md-0">No</th>
                <th style="font-size: 13px" class="text-center col-md-2">Hari/Tanggal </th>
                <th style="font-size: 13px" class="text-center col-md-3">Pembina/Pelatih</th>
                <th style="font-size: 13px" class="text-center col-md-4">Materi</th>
                <th style="font-size: 13px" class="text-center col-md-4">Keterangan</th>
              </tr>
            </thead>

            <tbody>

              <?php
              $no=1;
              while(($count<$rpp) && ($i<$tcount)) {
                mysqli_data_seek($result,$i);
                $data = mysqli_fetch_array($result);
              ?>


              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['hari_tanggal'] ?></td>
                <td><?php echo $data['kode_pembina'] ?></td>
                <td><?php echo $data['materi'] ?></td>
                <td><?php echo $data['keterangan'] ?></td>
              </tr>

            <?php
            $i++;
            $count++;
          }?>

            </tbody>



      </table>
      <hr>

        <a href="" target="_blank"><button type="submit" class="pull-right btn btn-xs btn-danger"><i class="fa fa-print" aria-hidden="true"></i>Cetak</button></a>

        <p style="font-size: 12px;"><span class="fa fa-print" aria-hidden="true"></span> Untuk Mencetak data </p>
      </form>

      <div class="text-right"><?php echo paginate_one($reload, $page, $tpages); ?></div>


    </div>
  </div>
</div>
