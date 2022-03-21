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
	$qnum = $_SESSION['qInput'];

	//checking if chosen answer is right
	if (isset($_SESSION['questionblock'])) {
		$questionblock = $_SESSION['questionblock'];
		//checking if chosen answer was correct
		if ($_POST['answers'] == $questionblock[$qnum][6]) {
			//add points to score
			$_SESSION['score'] = $_SESSION['score'] + $questionblock[$qnum][0];
			//turns question as answered
			$_SESSION['questionblock'][$qnum][7] = 1;
			$_SESSION['abool'] = 1;
			$_SESSION['qbool'] = false;
			//redirects to game board
			header("location:playgame.php");
		}
		//when chosen answer is wrong
		else {
			//subtracts points to score
			$_SESSION['score'] = $_SESSION['score'] - $questionblock[$qnum][0];
			//turns question as answered
			$_SESSION['questionblock'][$qnum][7] = 1;
			$_SESSION['abool'] = 1;
			$_SESSION['qbool'] = false;
			//redirects to game board
			header("location:playgame.php");
		}
	}
	//redirects to the first page
	else {
		header("location:login.php");
	}
	?>

</body>
</html>
