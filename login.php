<?php ob_start();
require_once ('../function/user.php')
?>
<div class="thumbnail" style="margin-bottom: 150px;">
	<div class="caption">

		<h4 class="text-success"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Member</h4>
		<hr>

			<?php
        session_start();

				if(isset($_POST['login'])){

					$username	= $_POST['username'];
					$password	= $_POST['password'];

					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">username atau password salah</div>';
					}else{
						$row = mysqli_fetch_assoc($query);
						if($row['level'] == admin){
							$_SESSION['username']=$username;
							$_SESSION['level']='admin';
							header("Location: ../admin/index.php?u=home");
							date_default_timezone_set('Asia/Jakarta');
							$tanggal = date("Y/m/d");
							$waktu = date("h:i:sa");
							//$nama = $username;
							//$cekdata = mysqli_query($con, "SELECT * FROM guestbook WHERE username='$nama' AND tanggal='$tanggal'");
							if (mysqli_num_rows($cekdata)>0) {
								//noaction;
							}else{
							//	mysqli_query($con, "INSERT INTO guestbook (username,tanggal,waktu) VALUES ('$nama','$tanggal','$waktu')");
							}
						}elseif($row['level'] == pembina){
							$_SESSION['username']=$username;
							$_SESSION['level']='pembina';
							header("Location: users/index.php?u=home");
							date_default_timezone_set('Asia/Jakarta');
							$tanggal = date("Y/m/d");
							$waktu = date("h:i:sa");
							//$nama = $username;
							//$cekdata = mysqli_query($con, "SELECT * FROM guestbook WHERE username='$nama' AND tanggal='$tanggal'");
							if (mysqli_num_rows($cekdata)>0) {
								//noaction;
							}else{
							//	mysqli_query($con, "INSERT INTO guestbook (username,tanggal,waktu) VALUES ('$nama','$tanggal','$waktu')");
						} elseif ($row['level'] == siswa){
								$_SESSION['username']=$username;
								$_SESSION['level']='siswa';
								header("Location: users/index.php?u=home");
								date_default_timezone_set('Asia/Jakarta');
								$tanggal = date("Y/m/d");
								$waktu = date("h:i:sa");
								//$nama = $username;
								//$cekdata = mysqli_query($con, "SELECT * FROM guestbook WHERE username='$nama' AND tanggal='$tanggal'");
								if (mysqli_num_rows($cekdata)>0) {
									//noaction;
								}else{
								//	mysqli_query($con, "INSERT INTO guestbook (username,tanggal,waktu) VALUES ('$nama','$tanggal','$waktu')");
								}
						}else{
							echo '<div class="alert alert-danger">Login gagal.</div>';
						}
					}
				}
			?>

		<p class="text-danger" style="font-size: 13px;">Fields marked by '*' are required.</p>

		<form role="form" action="" method="post">

			<div class="form-group">
				<label class="control-label" for="inputSmall">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Username : <font color = "red">*</font></label>
				<input type="text" name="username" class="form-control input-sm" required autofocus />
			</div>

			<div class="form-group">
				<label class="control-label" for="inputSmall">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Password : <font color = "red">*</font></label>
				<input type="password" name="password" class="form-control input-sm" required autofocus />
			</div>

			<div class="form-group">
				<input type="submit" name="login" class="btn btn-success btn-sm btn-block" value="Login" />
			</div>

		</form>

		<a href="#" class="text-danger" style="font-size: 14px;"> Lupa username/password </a>

	</div>
</div>
<?php ob_end_flush();?>
