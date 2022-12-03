<?php
    session_start();

    if ($_SESSION['user']){
        header('Location: /profile.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/css/style-authorization.css">
</head>
<body>
<div class="container">
        <h2>Авторизация:</h2>
        <form action="/php/signin.php" method="post" class="inputs">
        <label for="">Укажите вашу почту</label>
        <input type="email" name="email" placeholder="Укажите вашу почту">
        <label for="">Укажите ваш пароль</label>
        <input type="password" name="password" placeholder="Укажите ваш пароль">
        <p>
            У вас нет аккаунта? => <a href="/register.php">Зарегистрируйтесь</a>!
        </p>
        <button type="submit" class="button-submit">Войти</button>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="problems">'.$_SESSION['message'].'</p>';
                    unset($_SESSION['message']);
                }
            ?>
        </form>
    </div>
</body>
</html>