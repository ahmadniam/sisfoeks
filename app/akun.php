<?php

require_once ('../view/templates/header.php');
require_once ('../core/init.php');
$result = tampilUser();

 ?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li ><a href="dashboard.php">Jurnal & Presensi Online</a></li>
					<li class="active">Manajemen Akun</a></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->

<?php require_once ('../view/templates/side-menu.php') ?>
            <div class="col-md-9">
            <br>
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Manajemen User</h3>
    </div>
    <div class="panel-body">

      <table class="table table-striped table-responsive" id="akun">
        <thead>
          <tr>
            <th>#</th>
            <th>username</th>
            <th>hak akses</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>

        <?php while ($row = mysqli_fetch_assoc($result)) {?>
          <tr>
            <td><?php echo $row['id_user']?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['level']; ?></td>
            <td><a href="edit-akun.php?id=<?php echo $row['id_user'];?>"><button type="button" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></td>
          </tr>
        <?php } //endwhile ?>
          </tbody>

        </table>

    </div>
  </div>


               <br>

                <div class="row">
                  <div class="alert alert-info alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        Input User!
              </div>
                  <a href="add-akun.php">
                  <button type="button" class="btn btn-sm btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Tambah User</button>
                  </a>
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
