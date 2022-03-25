<?php
    //FILTER_VAR удалят html символы и другие лишние символы
    //trim удаляет лишние пробелы
    //mb_strlen длина переменной




    $login = filter_var(trim($_POST['login']),   
    FILTER_SANITIZE_STRING);                     
    $email = filter_var(trim($_POST['email']),    
    FILTER_SANITIZE_STRING); 
    $password = filter_var(trim($_POST['password']),   
    FILTER_SANITIZE_STRING); 

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "недопустима длина логина";
        exit();
    } else if (mb_strlen($email) < 3 || mb_strlen($email) > 50) {
        echo "недопустима длина имени";
        exit();
    } else if (mb_strlen($password) < 2 || mb_strlen($password) > 6) {
        echo "недопустима длина имени";
        exit();
    }
    $pass = md5($pass."ukmjynhbg");
    $mysql = new mysqli('localhost','mysql','','register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `password`, `email`) 
    VALUES('$login', '$password', '$email')");
    $mysql->close();
    
    exit();
?>