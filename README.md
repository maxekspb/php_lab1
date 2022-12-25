# HTTP аутентификация
## Текст задания
### Цель работы
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
## Ход работы
## 1. [Пользовательский интерфейс](https://www.figma.com/file/aHfaYNNKsxzvku7QA67IPm/lab1?t=Q0gnYqOvIbW5sp1G-1)
## 2. [Пользовательские сценарии работы](https://imgur.com/a/QWxXQGT)
## 3. [API сервера и хореография](https://imgur.com/a/zI4rfq1)
## 4. Структура базы данных
| id | login | hash |
|:---|:------|:-----|
- id: INT, AUTO_INCREMENT, PRIMARY KEY;
Уникальный идентификатор пользователя
- login: VARCHAR, 100;
логин пользователя
- hash: VARCHAR, 255;
хэшированный пароль
## 5. [Алгоритмы](https://imgur.com/a/QWxXQGT)
## 6. Примеры HTTP запросов/ответов
<br>POST /login_processing.php HTTP/1.1
<br>Host: localhost
<br>Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
<br>Content-Type: application/x-www-form-urlencoded
<br>sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Microsoft Edge";v="108"
<br>sec-ch-ua-mobile: ?0
<br>sec-ch-ua-platform: "Windows"
<br>Upgrade-Insecure-Requests: 1
<br>User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 <br>(KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54

<br>HTTP/1.1 303 See Other
<br>Connection: Keep-Alive
<br>Content-Encoding: gzip
<br>Content-Length: 20
<br>Content-Type: text/html; charset=UTF-8
<br>Date: Sun, 25 Dec 2022 20:42:08 GMT
<br>Keep-Alive: timeout=5, max=100
<br>Location: login.php
<br>Server: Apache/2.4.33 (Win64) OpenSSL/1.0.2u mod_fcgid/2.3.9 PHP/8.0.1
<br>Vary: Accept-Encoding
<br>X-Powered-By: PHP/8.0.1
## 7. Важные части кода
Хеширование пароля и запись его в базу данных.
```PHP
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
```
