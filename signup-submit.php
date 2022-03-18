<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeopardy | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<!-- getting user information -->
	<?php
	session_start();

	$opening = fopen('users.txt', 'a');
	$pushingdata = array ($_POST['username'], $_POST['password']);

	$files = file_get_contents('users.txt');
	$contents = fopen("users.txt", 'r+');
	fputs($contents, $files);
	rewind($contents);

	//putting file contents in array
	$userArray = [];
	while (($data = fgetcsv($contents)) != false) {
		$userArray[] = $data;
	}
	$_SESSION['signfail'] = false;

	//checking for errors when data was pushed
	for ($i = 0; $i < count($userArray); $i++) {
		if (!isset($userArray[$i][0])) {
			continue;
		}
		else {
			if ($_POST['username'] == $userArray[$i][0]) {
				$_SESSION['signfail'] = true;
				header("location:signup.php");
			}
		}
	}

	//redirecting results if sign up was successful
	fclose($contents);
	$contents = fopen("users.txt", 'w');
	print_r($pushingdata);
	fputcsv($contents, $pushingdata);
	header("location:login.php");
	fclose($contents);
	?>

</body>
</html>
