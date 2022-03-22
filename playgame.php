<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeopardy | Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
	session_start();
	include 'gamecontents.php';
	include 'gameboard.php';

	//making all questions unanswered during this session
	if (!isset($_SESSION['qbool'])) {
		$_SESSION['qbool'] = false;
	}

	//setting up user scoreboard
	if (!isset($_SESSION['questionblock'])) {
		$_SESSION['questionblock'] = questions();
	}

	if (!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
		echo "<h3>Current Score: 0</h3>";
	}
	else {
		echo "<h3>Current Score: " . $_SESSION['score'] . "</h3>";
	}

	//checking answers
	if (isset($_SESSION['abool'])) {
		if ($_SESSION['abool'] == 0) {
			echo "<h3>Your answer was incorrect!</h3>";
		}
		else {
			echo "<h3>Your answer was correct!</h3>";
		}
	}

	if(!isset($_SESSION['wrongInput'])){
       $_SESSION['wrongInput'] = false;
	  
	}

	if( $_SESSION['wrongInput'] == true){
		echo "<h3> Wrong input </h3>";
	
	}

	//checking for answered questions
	if ($_SESSION['qbool'] == true) {
		echo "<h4><b>ERROR! This question has been answered, pick another one!</b></h4>";
	}
	?>

	<!-- form that allows user to choose their question -->
	<div class="choosequestion">
		<form action="play-submit.php" method="POST">
			<fieldset>
				<legend>Print the question number in order to choose that question.</legend>
				<label for="inputnum"><b>Question #</b></label>
				<input type="text" name="inputnum" size="1" maxlength="2">
				<input type="submit" value="Choose Question">
			</fieldset>
		</form>
	</div>

	<!-- creating game board -->
	<div class="questionHeader">
		<div class="questions">
			<div class="q"><b>Topic 1</b></div>
			<div class="q"><b>Topic 2</b></div>
			<div class="q"><b>Topic 3</b></div>
		</div>
		<?php
		board(1, 100);
		board(2, 200);
		board(3, 300);
		?>
	</div>
	
	<?php
	//checking if all questions have been answered
	$allanswered = true;
	for ($i = 0; $i < count($_SESSION['questionblock']); $i++) {
		if ($_SESSION['questionblock'][$i][7] == 0) {
			$allanswered = false;
		}
	}

	//shows leaderboard when all questions have been answered
	if ($allanswered == true) {
		$scoreArray = array($_SESSION['username'], $_SESSION['score']);
		$files = fopen("leaderboard.txt", 'a+');
		fputcsv($files, $scoreArray);
		rewind($files);

		$sortlb = [];
		while (($line = fgetcsv($files)) != false) {
			$sortlb[$line[0]] = $line[1];
		}
		fclose($files);
		asort($sortlb);

		if (isset($_SESSION['score'])) {
			echo "<h3>Game Over! Your Final Score is " . $_SESSION['score'] . "! Thank you for playing our game!<br>You can now view the Leaderboard below</h3>";
		}
		echo "<div class='leaderboard'>";
		echo "<b><p>Leaderboard: </p></b><br>";
		foreach ($sortlb as $lbname => $lbvalue) {
			echo "<p>" . $lbname . "'s Score: " . $lbvalue;
			echo "<br>";
		}
		echo "</div>";
	}
	?>
	
	<a href="login.php">Back to Login Page</a>

</body>
</html>
