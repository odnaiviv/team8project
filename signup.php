<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeopardy | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
	session_start();
	if (isset($_SESSION['signfailed'])) {
		if ($_SESSION['signfailed'] == true) {
			//prompts error message
			echo "<h3>ERROR! Username is taken, please create a different username.</h3>";
		}
	}
	?>
	<form action="signup-submit.php" method="POST">
		<fieldset>
			<legend>Sign Up: </legend>
			<label for="username"><b>Username: </b></label>
			<input type="text" maxlength="16" name="username">
			<br>
			<label for="password"><b>Password: </b></label>
			<input type="password" maxlength="16" name="password">
			<br>
			<input type="submit" value="Sign Up!">
		</fieldset>
	</form>
	
</body>
</html>
