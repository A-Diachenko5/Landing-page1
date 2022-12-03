
<?php

session_start();
require_once "connect.php";

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password === $confirm_password) {
    
    $password = md5($password);
    mysqli_query ($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', NULL, '$email', '$password', NULL)");
    
    $_SESSION['message'] = "Регистрация прошла успешно!";
    header("Location: ../profile.php");

} else {
    $_SESSION['message'] = "Пароли не совпадают!";
    header("Location: ../register.php");
}
