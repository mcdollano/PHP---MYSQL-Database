<?php
	require 'connection.php';

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pw2 = $_POST['pw2'];

		if ($password == $pw2) {
			$password = sha1($password);

			$sql = "INSERT INTO users(username,password,role) 
			VALUES 
			('$username', '$password', 'regular')";
			mysqli_query($conn, $sql);

			echo "Registration Successful!";
		} else {
			echo "Password did not match.";
		} 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<h1>REGISTER</h1>
<div class='register'>
	<form method='POST' action="">
		<div class="form-group">		
			<input type='text' class='email' name='username' placeholder='Username'>	
		</div>
		<br>		
		<div class="form-group">		
			<input type='password' class='password' name='password' placeholder='Password'>			
		</div>	
		<br>
		<div class="form-group">	
			<input type='password' class='confirm-password' name='pw2' placeholder='Confirm Password'>	
		</div>			
		<br>
		<div class="form-group">
			<input class='btn btn-success' type='submit' name='register' value='Register'>
		</div>
	</form>
</div>						
