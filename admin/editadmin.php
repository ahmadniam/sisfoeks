<?php
/*
if(isset($_POST['update'])){

  if(editakunAdmin($_POST['password'],$_POST['email'],$_POST['firstname'],
                  $_POST['lastname'],$_GET['id'])){

    header ('location: index.php?u=KelolaUser.php');

  }else{
    echo 'edit akun admin gagal';
  }
}
*/
	$id=$_GET['id'];
	$edit=mysqli_query($link,"SELECT * FROM users WHERE id_user='$id'");
	while($data=mysqli_fetch_array($edit)){
?>

<div class="panel panel-default">
  <div class="panel-body">

  <div class="col-md-12 col-sm-6 col-xs-4">

                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Admin</h4>
                <hr>

        <?php
        if ($_SESSION['username'] == "admin"){
        ?>


				        <ul class="nav nav-pills">

				            <li><a href="index.php?u=KelolaUser"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Kelola User</a></li>

				            <li><a href="index.php?u=tambahadmin"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Admin</a></li>

				            <li><a href="index.php?u=tambahpembina"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Pembina</a></li>

				            <li><a href="index.php?u=tambahsiswa"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Siswa</a></li>

				        </ul>

        <?php
        }else{
        ?>

        <ul class="nav nav-pills">

            <li><a href="index.php?u=KelolaUser"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Kelola User</a></li>

            <li><a href="index.php?u=tambahuser"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;User</a></li>

        </ul>

        <?php } ?>
        <br>

    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">

    <div class="panel-heading">
        <p>Edit</p>
    </div>

    <div class="panel-body">
    <div class="col-md-6 col-sm-6 col-xs-4">

                <form action="admin_update.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Firstname</label>
                    <input type="hidden" name="id"  class="form-control input-sm" value="<?php echo $data['id'];?>" required autofocus/>
                    <input type="text" name="firstname"  class="form-control input-sm" value="<?php echo $data['firstname'];?>" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Lastname</label>
                    <input type="text" name="lastname"  class="form-control input-sm" value="<?php echo $data['lastname'];?>" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Email</label>
                    <input type="text" name="email"  class="form-control input-sm" value="<?php echo $data['email'];?>" required autofocus/>
                </div>

    </div>
    <div class="col-md-6 col-sm-6 col-xs-4">

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Username<br><small class="text-danger" style="font-size: 13px;"><i>(username tidak dapat diganti)</i></small></label>
                    <input type="hidden" name="username"  class="form-control input-sm" value="<?php echo $data['username'];?>" required autofocus/>
                    <input type="text" name="username"  class="form-control input-sm" value="<?php echo $data['username'];?>" required autofocus disabled/>
                </div>

                <div class="form-group" style="margin-bottom: 10px;">
                    <label class="control-label" for="inputSmall">Password<br><small class="text-danger" style="font-size: 13px;"><i>(Masukan Password Baru Jika ingin mengubah atau biarkan jika tidak ingin mengubah)</i></small></label>
                    <input type="password" name="password"  class="form-control input-sm"/>
                </div>

    </div>
    <div class="col-md-12 col-sm-6 col-xs-4">

                <hr>
                <div class="text-right">
                <button class="btn btn-success btn-sm" type="submit">
                simpan
                </button>

                <button type="reset" class="btn btn-primary btn-sm" href="index.php?u=KelolaUser" style="margin-right: 20px;">
                Reset
                </button>
                </div>

                </form>
    </div>

</div>
</div>
</div>
</div>
</div>


<?php } ?>
