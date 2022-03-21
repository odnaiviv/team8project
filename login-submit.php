<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeopardy | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<!-- getting user information -->
	<?php
	session_start();
	//putting contents in file
	$files = file_get_contents('users.txt');
	$contents = fopen("users.txt", 'r+');
	fputs($contents, $files);
	rewind($contents);

	//putting file contents in array
	$userArray = [];
	while (($data = fgetcsv($contents)) != false) {
		$userArray[] = $data;
	}
	$logfail = true;
	
	//checking for errors when data was pushed
	for ($i = 0; $i < count($userArray); $i++) {
		if (!isset($userArray[$i][0])) {
			continue;
		}
		else {
			if ($_POST['username'] == $userArray[$i][0] && $_POST['password'] == $userArray[$i][1]) {
				$_SESSION['username'] = $userArray[$i][0];
				$logfail = false;
			}
		}
	}
	//redirecting results
	print_r($userArray);
	//goes back to login page when failed
	if ($logfail == true) {
		$_SESSION['logfail'] = true;
		header("location:login.php");
	}
	else {
		//goes to game board when succeeds
		if ($logfail == false) {
			$_SESSION['logfail'] = false;
			header("location:playgame.php");
		}
	}
	?>

</body>
</html>
