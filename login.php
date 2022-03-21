<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeopardy | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<!-- creating user login session -->
	<?php
	session_start();
	//checking if user failes to login
	if (isset($_SESSION['logfailed'])) {
		if ($_SESSION['logfailed'] == true) {
			//prompts error message
			echo "<h3>ERROR! Incorrest Username and/or Password. Please try again.</h3>";
			$_SESSION['logfailed'] = false;
		}
	}
	?>
	
	<h1>Welcome to Jeopardy!</h1>

	<!-- form for user to login -->
	<form action="login-submit.php" method="POST">
		<fieldset>
			<legend>Login: </legend>
			<label for="username"><b>Username: </b></label>
			<input type="text" maxlength="16" name="username">
			<br>
			<label for="password"><b>Password: </b></label>
			<input type="password" maxlength="16" name="password">
			<br>
			<input type="submit" value="Login!">
		</fieldset>
	</form>

	<!-- redirecting user to create an account -->
	<a href="signup.php">Don't have an account?<br>Click here to make one!</a>

</body>
</html>
