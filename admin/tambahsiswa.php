<?php
if(isset($_POST['simpan'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
//  $lastname = $_POST['lastname'];
  $studentid = $_POST['studentid'];
  $kelas = $_POST['kelas'];
  $jurusan = $_POST['jurusan'];
  $level = 'siswa';

  if(!empty(trim($username)) && !empty(trim($password))    && !empty(trim($level)) ){

        if(cekTambahUser($username) ) {
                //memasukkan user ke database
                    if(tambahakunSiswa($username,$password,$email,$firstname,$studentid,$kelas,$jurusan,$level)){
                      header('location:index.php?u=KelolaUser');
                      //echo 'input user berhasil';
                    } else{
                      echo "gagal input cuy";
                    }
                  }else {
                  echo "username already exist";
                }
   } else {
    echo "tidak boleh kosong ya";
  }
}
 ?>
<div class="panel panel-default">
  <div class="panel-body">

    <div class="col-md-12 col-sm-6 col-xs-4">

                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Tambah User Siswa</h4>
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
    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="panel panel-default">

    <div class="panel-heading">
        <p>1. Akun User</p>
    </div>

    <div class="panel-body">

                <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">

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
        <p>2. Detail Siswa</p>
    </div>

    <div class="panel-body">

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Studentid<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="text" name="studentid"  class="form-control input-sm" placeholder="NIS" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Nama Lengkap<small class="text-danger" style="font-size: 13px;"><i>*</i></small></label>
                    <input type="text" name="firstname"  class="form-control input-sm" placeholder="Firstname" required autofocus/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Kelas</label>
                    <select class="form-control" name="kelas">
                      <option><= Pilih Kelas =></option>
                      <option>X</option>
                      <option>XI</option>
                      <option>XII</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputSmall">Jurusan</label>
                    <select class="form-control" name="jurusan">
                      <option><= Pilih Jurusan =></option>
                      <option>DPIB 1</option>
                      <option>DPIB 2</option>
                      <option>DPIB 3</option>
                      <option>EIN 1</option>
                      <option>EIN 2</option>
                      <option>TAV 1</option>
                      <option>TAV 2</option>
                      <option>TITL 1</option>
                      <option>TITL 2</option>
                      <option>TSM 1</option>
                      <option>TSM 2</option>
                      <option>TPM 1</option>
                      <option>TPM 2</option>
                      <option>TKR 1</option>
                      <option>TKR 2</option>
                      <option>MM 1</option>
                      <option>MM 2</option>
                      <option>ANIMASI</option>
                    </select>
                </div>

                <hr><p style="font-size: 12px;">Detail berisi informasi siswa <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></p>

    </div>
    </div>

    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <p>3. Simpan Akun</p>
    </div>

    <div class="panel-body">

        <p style="font-size: 12px;"> Simpan akun sebagai siswa <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></p>

                <button class="btn btn-success btn-sm btn-block" name="simpan" type="submit" style="margin-bottom: 20px">
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
