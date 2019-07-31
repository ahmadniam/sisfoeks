<?php
		if(isset($_POST['login'])){
			include("koneksi.php");
					
				$username	= $_POST['username'];
				$password	= md5($_POST['password']);
					
				$query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
				if(mysqli_num_rows($query) == 0){
				echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
				}else{
				$row = mysqli_fetch_assoc($query);
						
				if($row['level'] == 1){
				$_SESSION['username']=$username;
				$_SESSION['level']='admin';
				header("Location: admin/index.php");
				}else if($row['level'] == 2){
				$_SESSION['username']=$username;
				$_SESSION['level']='user';
				header("Location: users/index.php");
				}else{
				echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
				}
				}
			}
?>