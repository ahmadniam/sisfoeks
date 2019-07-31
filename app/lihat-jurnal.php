<?php
require_once ('../view/templates/header.php');
require_once ('../core/init.php');


if(isset($_GET['nama_ekstra'])){

  if(cari($_GET['nama_ekstra'])){
    header ('location: rekap_jurnal.php');
  }else{
    echo 'hapus jurnal gagal';
  }
}


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

<!--
							<div class="alert alert-info alert-dismissable">
					 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									Lihat Rekap Jurnal, </strong> Silakan pilih tanggalnya
			 </div>

-->
         <!-- Area Form Search Kegiatan -->
				 <div class="panel panel-default">
				   <div class="panel-heading">
				     <h3 class="panel-title">Pilih Rekap Jurnal Ekstra</h3>
				   </div>
				   <div class="panel-body">
						 <form class="form-horizontal" method="post" action="rekap-jurnal.php">
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
                 <a href="rekap-jurnal.php"><button name="cari" type="button" class="btn btn-xs btn-primary"><i class="fa fa-search" aria-hidden="true"></i> lihat</button>
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
<?php require_once('../view/templates/footer.php') ?>
