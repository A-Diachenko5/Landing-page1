<?php 

$connect = mysqli_connect('localhost','root','','users');

if(!$connect) {
    die ("Проблема с подключение к базе данных");
}