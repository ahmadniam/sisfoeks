<?php
require_once ('../core/init.php');
require_once ('../view/templates/header.php');


if(!isset($_SESSION['username'])) {
  header ('location: ../auth/index.php');
}
 ?>

				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li class="active">Jurnal & Presensi Online</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<!-- load judul, menu sidebar-->
<?php require_once('../view/templates/side-menu.php') ?>


    <div class="col-md-9">
      <div class="profile-content">
        <h4><strong>Selamat Datang</strong> <span class="label label-primary"><?php  echo $_SESSION['username']; ?> !</span></h4>
        <p>Silahkan input kehadiran siswa dan jurnal kegiatan pada menu yang telah tersedia
        </p>
      </div>
    </div>
  </div>


        </div>
<!--//doc-wrapper-->
<?php
require_once('../view/templates/footer.php');
 ?>
