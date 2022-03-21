<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeopardy | Question</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
	session_start();
	$num = $_POST['inputnum'] - 1;
	$_SESSION['inputnum'] = $num;

	//checking if user input is valid
	if (isset($_SESSION['questionblock'])) {
		$questionblock = $_SESSION['questionblock'];
		//checking if user input was an answered question or not
		if ($_SESSION['questionblock'][$num][7] == 1) {
			$_SESSION['qbool'] = true;
			//returns back to game board
			header("location:playgame.php");
		}
		else {

			//creating another form for user to select answer
			//$questionblock array based on the $contents array in gamecontents.php

			echo "
			<h3>Question: " . $questionblock[$num][1] . "</h3>
			<form action='answered-submit.php' method='POST'>
			<fieldset>
			<legend>Select Answer: </legend>
			<label for='A'><b>" . $questionblock[$num][2] . "</b></label>
			<input type='radio' name='answer' value='A'>
			<br><br>

			<label for='B'><b>" . $questionblock[$num][3] . "</b></label>
			<input type='radio' name='answer' value='B'>
			<br><br>

			<label for='C'><b>" . $questionblock[$num][4] . "</b></label>
			<input type='radio' name='answer' value='C'>
			<br><br>

			<label for='D'><b>" . $questionblock[$num][5] . "</b></label>
			<input type='radio' name='answer' value='D'>
			<br><br>

			<input type='submit' value='Lock in my Answer!'>

			</fieldset>
			</form>
			";
		}
	}
	//redirects to the first page
	else {
		header("location:login.php");
	}
	?>
	
</body>
</html>
