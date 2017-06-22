<?php
	session_start();

	if (isset($_POST['login'])) {
		require('connection.php');
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users
		WHERE username = '$username'
		AND password = '$password'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
				extract($row);
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;

				echo "login Successful";
				// header('location:home.php');

			}
		}
	}
?>

		<div class="login-content">
			<div class=login>
				<h4>LOG IN</h4>
				<form method="POST">	
					<div class="login-container">
						<input type="text" class="loginkey" name="username" placeholder="Username">
					</div>
					<br>
					<div class="login-container">
						<input type="password" class="loginkey" name="password" placeholder="Password">
					</div>
					<br>
					<!-- <p>Forgot your Password?<br><a href="change_pw.php">Click Here!</a></p> -->
			
					<!-- <p>Don't have an account yet?<br><a href="register.php">Sign Up Here!</a></p> -->
					<input class="btn btn-primary" type="submit" name="login" value="Log In">

				</form>
			</div>
		</div>