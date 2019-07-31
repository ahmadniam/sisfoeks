<?php require_once('../view/templates/header.php') ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active"><a href="#">Rekap Kehadiran</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php require_once('../view/templates/side-menu.php') ?>
            <div class="col-md-9">

            <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Lihat <strong>rekap kehadiran ! </strong>
			</div>


               	<div class="row"> </div>
              <div class="row">
<div class="row">

</div>



              </div>

             <div class="row"> </div>
              <a href="rekap_kehadiran_siswa.php">
              <button type="button" class="btn btn-info"><i class="fa fa-user" aria-hidden="true"></i> Cek Kehadiran Siswa</button></a>
              <a href="rekap_kehadiran_pembina.php">
              <button type="button" class="btn btn-danger"><i class="fa fa-user" aria-hidden="true"></i> Cek Kehadiran Pembina</button></a>


              <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
              </div>

            </div>
          <br><br>
          </div>
        </div>
<!--//doc-wrapper-->
<?php require_once('../view/templates/footer.php') ?>
