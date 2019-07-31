<?php ob_start();
require_once ('../core/init.php');
?>
			<?php
				if(isset($_POST['masuk'])){

					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$passwordnya = password_hash($password, PASSWORD_DEFAULT);

					$query = mysqli_query($link, "SELECT * FROM users WHERE username='$username' AND password='$passwordnya'");

					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">username atau password salah</div>';
					}else{
						$row = mysqli_fetch_assoc($query);

						if($row['level'] == 'admin'){
							$_SESSION['username']=$username;
							$_SESSION['level']='admin';
							header("Location: ../admin/index.php?u=home");
							date_default_timezone_set('Asia/Jakarta');
							$tanggal = date("Y/m/d");
							$waktu = date("h:i:sa");


						}else if($row['level'] == 'pembina'){
							$_SESSION['username']=$username;
							$_SESSION['level']='pembina';
							header("Location: ../assets/index.php?u=home");
							date_default_timezone_set('Asia/Jakarta');
							$tanggal = date("Y/m/d");
							$waktu = date("h:i:sa");

						}else{
							echo '<div class="alert alert-danger">Login gagal.</div>';
						}
					}
				}
			?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>::: Presensi dan Jurnal Ekstra :::</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
	<section class="container">
	    <section class="login-form">
		<form method="post" action="../auth/index.php" role="login">
			<div>
				<img src="images/logosmk4.jpg" width="20%" />
				<h4>SMKN 4 SEMARANG</h4>
			</div>
			<input type="text" name="username" placeholder="Username ... " required autofocus class="form-control input-lg" />
			<input type="password" name="password" placeholder="Password ..." required autofocus class="form-control input-lg" />
			<button type="submit" name="masuk" class="btn btn-lg btn-block btn-info">Masuk</button>
			<div>
				&copy; 2017 by <a href="http://teknodik.unnes.ac.id">Edutech Team</a>
			</div>
		</form>
		</section>
	</section>
</body>
</html>

<?php ob_end_flush();?>
