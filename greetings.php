<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
        Logged in!
    </title>
</head>
<?php
	if ($_COOKIE['username'] == "")
		header("Location: login.php", true, 303);
	$username = $_COOKIE['username'];

	echo "hi, $username";
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
    <form action="index.php">
    <button class = "register_button">Log out!</button>
    </form>
</body>
</html>
