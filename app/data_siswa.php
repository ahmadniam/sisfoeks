<?php
require_once ('../view/templates/header.php');
$result = tampilSiswa();
 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Data Siswa</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
<?php
require_once ('../view/templates/side-menu.php')
 ?>
            <div class="col-md-9">
              <h3>Data Siswa</h3>
<hr>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data Siswa</h3>
  </div>
  <div class="panel-body">
    <br>
        <table class="table table-responsive" id="data_siswa">
          <thead>
            <tr>
              <th>NIS</th>
              <th>Nama Peserta</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>Ekstra</th>
              <th>Aksi</th>

            </tr>
          </thead>
          <tbody>
<?php while ($row = mysqli_fetch_assoc($result)) {?>
<tr>
<td><?php echo $row['nis']?></td>
<td><?php echo $row['nama_siswa']?></td>
<td><?php echo $row['kelas']?></td>
<td><?php echo $row['jurusan']?></td>
<td><?php echo $row['kode_ekstra']; ?></td>
<td><a href="edit-siswa.php?id=<?php echo $row['nis'];?>"><button type="button" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
    <a href="delete-siswa.php?nis=<?php echo $row['nis'];?>"><button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></a></td>
</tr>
<?php } //endwhile ?>
          </tbody>
        </table>

  </div>
</div>
     <div class="alert alert-info alert-dismissable">
 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                upload data siswa disini!
			</div>
            <div class="row">
            <div class="col-md-5">
            <input type="file">
            <br>
            <button type="button" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
            <a href="add-siswa.php"><button type="button" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Siswa</button></a>
            </div>
            </div>
                <div class="row">

                </div>
            </div>

            </div>
          <br><br>
          </div>
        </div>
<!--//doc-wrapper-->
<?php
require_once ('../view/templates/footer.php')
 ?>
