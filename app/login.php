<?php
require_once('../view/templates/header.php');

if(isset($_POST['submit']) ){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty(trim($username)) && !empty(trim($password))  ){

		if(loginCek($username)) {

		if(cekUser($username, $password) ){

			$_SESSION['username'] = $username;
      $_SESSION['id_user']= $id_user

			header ('location:index.php');
		}
	}else {
				echo "username tidak terdaftar di sistem";
			}

   } else {
    echo "tidak boleh kosong ya";
  }
}

?>
				<ol class="breadcrumb">
                    <li><a href="../index.php">Beranda</a></li>
                    <li class="active">Login Page</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                  <h3 class="doc-title">
                    <em class="icon fa fa-paper-plane"></em> Jurnal &amp; Presensi Online
                  </h3>

                </div><!--//doc-header-->
                <div class="doc-body">
                  <div class="doc-content"> <!--//content-inner-->

                  </div><!--//doc-content-->
                  <div class="doc-sidebar hidden-xs"></div><!--//doc-sidebar-->
                  <button class="navbar-toggle btn-primary btn-md" data-toggle="collapse" data-target="#menu">
                    <em class="fa fa-folder-open-o"></em>Pilih Menu
                  </button>
                </div><!--//doc-body-->
            </div><!--//container-->
        </div>


        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form method="post" action="login.php" class="form-signin">
              <h3 class="form-signin-heading"><center>Login Sistem</h3><hr>
              <label for="inputUsername" class="sr-only">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username ..." required autofocus><br>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password ..." required>
              <br>
              <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Masuk</button>
            </form><br>
            <div class="alert alert-warning" role="alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Perhatian !</strong>
              <p><strong>username </strong> : diisi dengan Nomor Induk Siswa
                <br><strong>Password</strong> : default -> abc123
                <br>Jika ada kendala, hub. 021 600
              </p>
            </div>
            </div>
            </div>
  </div>

<?php
require_once ('../view/templates/footer.php')
 ?>
