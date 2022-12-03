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
    <link rel="stylesheet" href="/css/style-register.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <h2>Регистрация:</h2>
          
        <form action="/php/signup.php" method="post" class="inputs">
        <label for="">Укажите ваше полное имя</label>
        <input type="text" name="full_name" placeholder="Укажите ваше полное имя">
        <label for="">Укажите вашу почту</label>
        <input type="email" name="email" placeholder="Укажите вашу почту"> 
        <label for="">Укажите ваш пароль</label>
        <input type="password" name="password" placeholder="Укажите ваш пароль"> 
        <label for="">Подтвердите ваш пароль</label>
        <input type="password" name="confirm_password" placeholder="Подтвердите ваш пароль"> 

        <button type="submit" class="button-submit">Зарегистрироваться</button>
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