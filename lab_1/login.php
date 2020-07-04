<!doctype html>
<html lang="rus">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Привет, что бы войти на сайт - введите логин и пароль!</h1>
<div class="content">
    <form action="main.php" method="post">
        <p>ЛОГИН:<br><input type="text" name="login" class="pass_area"></p>

        <p>ПАРОЛЬ:<br><input type="password" name="password" class="pass_area"></p>

        <input type="submit" name="send" value="LOGIN" class="button">
    </form>
</div>
</body>
</html>