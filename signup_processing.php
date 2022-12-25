<?php
	$login = $_POST['login'];
	$pass = $_POST['password'];
	$db = mysqli_connect('localhost', 'root', 'root', 'lab1');
	if (!$db)
		echo mysqli_connect_error();
	$pass = password_hash($pass, PASSWORD_BCRYPT);
	$logins = "SELECT login FROM users WHERE login ='$login'";
	$res = mysqli_query($db, $logins);
	$flag = 0;
	echo($login);
	while ($row = mysqli_fetch_array($res)) {
    	if ($row['login'] == $login) {
    		$flag = 1;
    	}
	}
	if ($flag > 0) {
		setcookie("message", "Имя занято", time() + 10);
    	header("Location: index.php", true, 303);
	}
    else {
    	$sql = "INSERT INTO users (login, hash) VALUES ('$login', '$pass')";
		$res = mysqli_query($db, $sql);
		mysqli_close($db);
		setcookie("username", $login, time() + 30);
		header("Location: greetings.php", true, 303);
   	}	
?>