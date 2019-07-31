<?php

require_once ('../core/init.php');


//pagination

include 'pagination.php';
//$qData = mysqli_query($con, "SELECT*FROM users ORDER BY studentid ASC");
$result = tampilJurnal();
//pagination config start
$rpp = 20; // jumlah record per halaman
$reload = "index.php?u=kelolajurnal&pagination=true";
$page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
$tcount = mysqli_num_rows($result);
$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
$count = 0;
$i = ($page-1)*$rpp;
$no_urut = ($page-1)*$rpp;
//akihr pagination
?>

<div class="panel panel-default">
  <div class="panel-body">
		<div class="col-md-12 col-sm-6 col-xs-4">
			<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp; Jurnal Kegiatan</h4>
			<hr>

			<ul class="nav nav-pills">
					<li><a href="index.php?u=kelolajurnal"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;&nbsp;Kelola Jurnal</a></li>
					<li><a href="index.php?u=tambahjurnal"><span class="glyphicon glyphicon-th-large"></span>&nbsp;&nbsp;&nbsp;Tambah Jurnal</a></li>
          <li><a href="index.php?u=rekapjurnal"><span class="glyphicon glyphicon-th-large"></span>&nbsp;&nbsp;&nbsp;Rekap Jurnal</a></li>
			</ul>

			<br>
			<table id="datatable" class="table table-striped table-hover">

						<thead>
							<tr>
								<th style="font-size: 14px" class="text-center col-md-0">No</th>
								<th style="font-size: 14px" class="text-center col-md-1"> Ekstra</th>
								<th style="font-size: 14px" class="text-center col-md-1">Hari/Tanggal </th>
								<th style="font-size: 14px" class="text-center col-md-3">Pembina/Pelatih</th>
								<th style="font-size: 14px" class="text-center col-md-4">Materi</th>
								<th style="font-size: 14px" class="text-center col-md-1">Keterangan</th>
								<th style="font-size: 14px" class="text-center col-md-2">Aksi</th>
							</tr>
						</thead>

		<tbody>

			<?php

					while(($count<$rpp) && ($i<$tcount)) {
												mysqli_data_seek($result,$i);
												$data = mysqli_fetch_array($result);

			?>

			<tr>
										<td style="font-size: 12px"><?php echo ++$no_urut;?></td>

										<td style="font-size: 12px"><?php echo $data['kode_ekstra'];?></td>
										<td style="font-size: 12px"><?php echo $data['hari_tanggal'];?></td>
										<td style="font-size: 12px"><?php echo $data['nama_pembina'];?></td>
										<td style="font-size: 12px"><?php echo $data['materi'];?></td>
										<td style="font-size: 12px"><?php echo $data['keterangan'];?></td>
										<td style="font-size: 12px" class="text-center">

											<a href="index.php?u=editjurnal&id=<?=$data['id'];?>" class="btn btn-xs btn-warning" id="<?php echo  $data['id']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

											<a href="#" class="btn btn-xs btn-danger" data-toggle='modal' onclick="confirm_modal('jurnal_delete.php?&id=<?php echo $data['id']; ?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

										</td>
								</tr>


			<?php
				$i++;
										$count++;
										}
			?>

						</tbody>
			</table>

			<hr>
      <a href="../app/ekspor-jurnal.php"><button type="button" class="pull-right btn btn-xs btn-danger"><i class="fa fa-print" aria-hidden="true"></i>Cetak</button></a>

      <p style="font-size: 12px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> : Untuk mengubah data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> : Untuk menghapus data </p>

      <div class="text-right"><?php echo paginate_one($reload, $page, $tpages); ?></div>
			</div>


<!-- Modal Popup untuk delete-->

<div class="modal fade" id="modal_delete">
		<div class="modal-dialog">
				<div class="modal-content col-xs-6" style="margin-top:150px; margin-left: 200px;">

				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Anda Yakin Ingin Menghapus ?<br><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-top: 8px;"></h4>
				</div>

				<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
				<a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Batal</button>
				</div>

				</div>
		</div>
</div>

<script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src= "../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
				$(document).ready(function (){
						$(".open_modal").click(function (e){
								var m = $(this).attr("id");
								$.ajax({
										url: "user_modal_edit.php",
										type: "GET",
										data : {id: m,},
										success: function (ajaxData){
												$("#ModalEdit").html(ajaxData);
												$("#ModalEdit").modal('show',{backdrop: 'true'});
										}
								});
						});
				});
		</script>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>

</div>
</div>


  </div>
</div>
