<?php
	$login = $_POST['login'];
	$pass = $_POST['password'];
	$db = mysqli_connect('localhost', 'root', 'root', 'lab1');
	if (!$db)
		echo mysqli_connect_error();

	$pass = password_hash($pass, PASSWORD_BCRYPT);
	$sql = "SELECT hash FROM users WHERE login='$login'";
	$res = mysqli_query($db, $sql);
	$hashpass = mysqli_fetch_array($res);
	if (!strcmp($hashpass['hash'], $pass)) {
		mysqli_close($db);
		setcookie("username", $login, time() + 30);
		header("Location: greetings.php", true, 303);
    }
    else{
		mysqli_close($db);
		setcookie('name', '');
		setcookie("message", "Неверный логин или пароль", time() + 30);
		header("Location: login.php", true, 303);
	}
?>