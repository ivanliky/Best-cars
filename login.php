<?php
include('inc/connection.php');
include('functions.php');


	 $error ="";
	if(isset($_POST['submit']))
	{
	
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		if (login($email, $conn))
		{
			$result = mysqli_query($conn,"SELECT password FROM users WHERE email='$email'");
			$retpassword = mysqli_fetch_assoc($result);
			if(md5($password) !== $retpassword['password'])
			{
				$error = "Password is incorect";
			}
			else
		{
			$_SESSION['email'] = $email;
			header("location:site/site.php");
		}
	}
		else
		{
			$error = "Email does not exists";
		}
	}
	
	


	?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Untitled Document</title>
</head>

<body>



<div id="wrapper">

	<div id="form">
		<form class="login" method="post" action="login.php">
			<label>Email:</label><br/>
			<input class="subm" type="text" name="email"/><br/><br/>
			
			<label>Password:</label><br/>
			<input class="subm" type="password" name="password"/><br/><br/>
			<center><input class="btn" type="submit" name="submit" value="Login"/></center>	
			<div id="error"><?php echo $error;?></div>
			<h1>
				Not yet a member? <div class="btn"><a href="index.php">Sign up</a></div>
			</h1>
			
		</form>
	</div>
 
 
 
 
</div>




</body>
</html>
