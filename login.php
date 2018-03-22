<?php


	require_once('connect.php');

 
	if (isset($_POST['username']) and isset($_POST['password']))
 {

		$username = $_POST['username'];

		$password = $_POST['password'];


		$query = "SELECT * FROM `login` WHERE username='$username' and password='$password'";

		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

		$count = mysqli_num_rows($result);


		if ($count == 1) {


  
			$_SESSION['username'] = $username;

			echo "<script>alert('Welcome');</script>";

		}
  
		else  
  
			echo "<script>alert('Invalid Login Credentials');</script>";
	

}


?>





<!DOCTYPE html>

<html>

<head>
  
<title></title>

</head>

<body>

    <form class="form-signin" method="POST">
        
<h2 class="form-signin-heading">Login Form</h2>
        
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Username</span>
<input type="text" name="username" class="form-control" placeholder="Username" required>

</div>

<label for="inputPassword" class="sr-only">Password</label>

<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

</form>

</div>

</body>

</html>



