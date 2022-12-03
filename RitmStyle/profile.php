<?php
    session_start();

    if (!$_SESSION['user']){
        header('Location: /authorization.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style-profile.css">
    <title>Личный кабинет</title>
</head>
<body>
    <h1>ЛИЧНЫЙ КАБИНЕТ СЛЕДУЩЕГО ЧЕЛОВЕКА:</h1>
    <h1><?php echo $_SESSION['user']['full_name']?></h1>
    <a href="/php/logout.php" type="submit" class="btn-out">ВЫХОД</a>
</body>
</html>