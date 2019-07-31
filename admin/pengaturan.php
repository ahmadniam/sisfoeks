<?php
	$cekid = $_SESSION['username'];

	$edit=mysqli_query($link,"SELECT * FROM users WHERE username='$cekid'");
	while($data=mysqli_fetch_array($edit)){
?>

<div class="panel panel-default">
  <div class="panel-body">

    <div class="col-md-12 col-sm-6 col-xs-4">

                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Pengaturan</h4>
                <hr>

        <br>

    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">

    <div class="panel-body">
    <div class="col-md-6 col-sm-6 col-xs-4">

                <form action="user_update2.php" name="modal_popup" enctype="multipart/form-data" method="POST">

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
                    <input type="hidden" name="username"  class="form-control input-sm" value="<?php echo $data['username'];?>" required autofocus/>
                </div>




    </div>
    <div class="col-md-6 col-sm-6 col-xs-4">


                <div class="form-group" style="margin-bottom: 10px;">
                    <label class="control-label" for="inputSmall">Ganti Password</label>
                    <input type="password" name="password"  class="form-control input-sm"/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Email</label>
                    <input type="text" name="email"  class="form-control input-sm" value="<?php echo $data['email'];?>" required autofocus/>
                </div>


    </div>
    <div class="col-md-12 col-sm-6 col-xs-4">

                <hr>

                <p style="font-size: 12px;">Edit profil. <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></p>
                <div class="text-right">
                <button class="btn btn-success btn-sm" type="submit" style="margin-bottom: 20px">
                Simpan
                </button>

                <button type="reset" class="btn btn-primary btn-sm" href="index.php?u=KelolaUser" style="margin-right: 20px; margin-bottom: 20px">
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
