<?php 

$login = filter_var(trim($_POST['login']),   
FILTER_SANITIZE_STRING);                     
$password = filter_var(trim($_POST['password']),   
FILTER_SANITIZE_STRING); 

$pass = md5($pass."ukmjynhbg");
$mysql = new mysqli('localhost','mysql','','register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo "Такой пользоатель не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();
?>