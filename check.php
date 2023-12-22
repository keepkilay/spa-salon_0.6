<?php 
require_once ("functions.php");
require_once ("auth.php");
//print_r($_POST);
$login = $_POST['login'];
$password = $_POST['password'];

$error = '';
if(trim($login) == '')
  $error = 'Введите ваш логин';
else if(trim($password) == '')
  $error = 'Введите само сообщение';
else if(strlen($password) < 10)
  $error = 'Сообщение должно быть более 10 символов';

if($error != ''){
    echo $error;
    exit; 
}
// ТО ЧТО НИЖЕ ВООБЩЕ ХЗ
// $subject = "=?utf-8?B?" . base64_encode("Тестовое сообщение") . "?="; //subject переменная которая содержит название письма
// $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n"; //headers - заголовок. От кого пришло письмо (т е от пользователя) 

// mail('admin@itproger.com', $subject, $message, $headers); //Почта куда будет отправлена информация пользователя

header('Location: /login.php');
?> 

