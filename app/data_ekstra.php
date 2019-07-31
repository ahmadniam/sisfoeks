<?php
require_once ('../view/templates/header.php');
$result = tampilEkstra();
 ?>

				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Data Ekstra</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php
require_once('../view/templates/side-menu.php')
 ?>

            <div class="col-md-9">
              <h3> Data Ekstrakurikuler</h3><br>
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">

                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Ekstra</th>
                      <th>Pembina/Pelatih</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    while ($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_ekstra']; ?></td>
                      <td><?php echo $row['nama_pembina']; ?></td>
                      <td><button type="button" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></td>
                    </tr>
                      <?php } //endwhile ?>
                    </tbody>
                </table>
                <div class="row">

                </div>
              </div>

            </div>
          <br><br>
          </div>
        </div>
<?php
require_once('../view/templates/footer.php')
 ?>
