<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');

if(isset($_POST['simpan'])){

  if(tambahSiswa($_POST['nis'],$_POST['nama_siswa'],$_POST['kelas'],
                $_POST['jurusan'],$_POST['kode_ekstra'])){

    header ('location: data_siswa.php');
  }else{
    echo 'tambah siswa gagal';
  }
}
 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Tambah Siswa</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php require_once ('../view/templates/side-menu.php') ?>
            <div class="col-md-9">

            </div>
          </div>

            </div>
          <br><br>
          </div>
        </div>
<!--//doc-wrapper-->
        <br><br>
        <div id="promo-block" class="promo-block">
          <div class="container"></div>
          <!--//container-->
        </div><!--//promo-block-->

    </div>
<!--//page-wrapper-->
<?php
require_once('../view/templates/footer.php')
 ?>
