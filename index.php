<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
    Sign up!
</title>
</head>
<body>
<?php setcookie("username", ""); ?>
<div class="container">
    <h1> Регистрация нового пользователя </h1>
    <?php if ($_COOKIE['message']){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo($_COOKIE['message']); ?>
        </div> <?php } ?>
    <form method="POST" action = "signup_processing.php">
        <div class="form-group">
            <label for="login">Логин</label>
            <div>
                <input type="text" name="login" placeholder="Введите логин">
            </div>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <div>
                <input type="password" name="password" placeholder="Введите пароль">
            </div>
        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="register_button">Зарегистрироваться!</button>
            </div>
        </div>
    </form>
    <div class="container sign in">
        <p>Уже зарегистрированы? <a href="login.php">Войти</a>.</p>
    </div>
</div>
</body>