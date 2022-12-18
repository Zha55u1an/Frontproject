<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";
$name = $_POST['firstname'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$pass = $_POST['pass'];

if(mb_strlen($login)<5 || mb_strlen($login)>90){
    echo "Логин ұзындығы қанағаттандырмайды!";
    exit();
} else if(mb_strlen($name)<2 || mb_strlen($name)>50){
    echo "Есіміңіздің ұзындығы қанағаттандырмайды!";
    exit();
} else if(mb_strlen($pass)<4 || mb_strlen($pass)>15){
    echo "Құпия сөздің ұзындығы қанағаттандырмайды!";
    exit();
}

$mysql = new mysqli($servername, $username, $password, $dbname);
$mysql->query("INSERT INTO `users` (`firstname`, `surname`, `login`, `pass`)
VALUES('$name', '$surname', '$login', '$pass')");


$mysql->close();
header('Location: /lab8.html');
?> 
