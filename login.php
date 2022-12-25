<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
        Log in!
    </title>
</head>
<body>
<h1>Вход в уже созданный аккаунт</h1>
<?php setcookie("username", ""); ?>
<div class="container">
	<?php if ($_COOKIE['message']){ ?>
	<div class="alert alert-danger" role="alert">
		<?php echo($_COOKIE['message']); ?>
	</div> <?php } ?>
  <form method="POST" action = "login_processing.php">
    <div>
      <label for="login">Логин: </label>
      <div>
        <input type="text" name="login" placeholder="Введите логин">
      </div>
    </div>
    <div>
      <label for="password">Пароль: </label>
      <div>
        <input type="password" class="form-control" name="password" placeholder="Введите пароль">
      </div>
    </div>
    <div>
      <div>
        <button type="submit" class="register_button">Войти!</button>
      </div>
    </div>
  </form>
</div>

</body>	
</html>