<?php
require_once ('../view/templates/header.php');
$result = tampilPembina();
 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Data Pembina</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php
require_once('../view/templates/side-menu.php') ?>
            <div class="col-md-9">
              <h3> Data Pembina/Pelatih</h3><br>
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">

                <table class="table table-responsive table-striped" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode</th>
                      <th>Nama Pembina/Pelatih</th>
                      <th>NIP</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    while ($row = mysqli_fetch_assoc($result)) {?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode_pembina']; ?></td>
                    <td><?php echo $row['nama_pembina']; ?></td>
                    <td><?php echo $row['nip']; ?></td>
                  	 <td><button type="button" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></td>
                  </tr>
                  <?php } //endwhile ?>
                                  </tbody>
                                  </table>
                <div class="row">
            <div class="col-md-5">
              <a href="add-siswa.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Pembina</button></a>
            </div>
            </div>
                </div>
              </div>

            </div>
          <br><br>
          </div>
        </div>
<!--//doc-wrapper-->
<?php
require_once('../view/templates/footer.php')
 ?>
