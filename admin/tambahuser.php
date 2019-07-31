<div class="panel panel-default">
  <div class="panel-body">

    <div class="col-md-12 col-sm-6 col-xs-4">

                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Tambah User</h4>
                <hr>

        <?php
        if ($_SESSION['username'] == "admin"){
        ?>

        <ul class="nav nav-pills">

            <li><a href="index.php?u=KelolaUser"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Kelola User</a></li>

            <li><a href="index.php?u=tambahadmin"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Admin</a></li>

            <li><a href="index.php?u=tambahuser"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;User</a></li>

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
    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="panel panel-default">

    <div class="panel-heading">
        <p>1. Akun User</p>
    </div>

    <div class="panel-body">

                <form action="user_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Username<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="text" name="username"  class="form-control input-sm" placeholder="Username" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Password<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="password" name="password"  class="form-control input-sm" placeholder="Password" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Email<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="text" name="email"  class="form-control input-sm" placeholder="Email" required autofocus/>
                </div>
                <hr><p style="font-size: 12px;">Username dan password digunakan untuk log-in user <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></p>
    </div>
    </div>

    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="panel panel-default">

    <div class="panel-heading">
        <p>2. Detail User</p>
    </div>

    <div class="panel-body">

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Studentid<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="text" name="studentid"  class="form-control input-sm" placeholder="Studentid" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Firstname<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="text" name="firstname"  class="form-control input-sm" placeholder="Firstname" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Lastname</label>
                    <input type="text" name="lastname"  class="form-control input-sm" placeholder="Lastname"/>
                </div>
                <hr><p style="font-size: 12px;">Detail user berisi informasi user <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></p>

    </div>
    </div>

    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <p>3. Simpan Akun</p>
    </div>

    <div class="panel-body">

        <p style="font-size: 12px;"> Simpan akun sebagai user <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></p>

                <button class="btn btn-success btn-sm btn-block" type="submit" style="margin-bottom: 20px">
                Buat Akun
                </button>
                <p class="text-danger" style="font-size: 12px;">Fields marked by '*' are required.</p>
        <p style="font-size: 12px;"> Setelah disimpan, username tidak dapat dirubah. Detail akun dapat di ubah pada menu kelola akun. <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></p>

                </form>
    </div>
    </div>

    </div>

</div>
</div>
