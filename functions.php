<?php
session_start();

// function pre($val){
//     echo '<pre>';
//     print_r($val);
//     echo '</pre>';
// }

if($_GET['exit']=='Y'){
    unset($_SESSION['user']);
}

    //1.Для начала создайте несколько полезных функций и выделите их в отдельный файл:
function getUsersList() { //1) Функция, которая возвращает массив всех пользователей и хэш паролей
    return
    [
        ['login' => 'Петя', 'password' => '202cb962ac59075b964b07152d234b70'],//123 - пароль и хэш
        ['login' => 'Алексей', 'password' => 'd81f9c1be2e08964bf9f24b15f0e4900'],//345
        ['login' => 'Андрей', 'password' => '99c5e07b4d5de9d18c350cdf64c5aa3d'],//567
        ['login' => 'Вася', 'password' => '68053af2923e00204c3ca7c6a3150cf7'],//789
        ['login' => 'Анна', 'password' => 'cfbce4c1d7c425baf21d6b6f2babe6be'],//891
    ];
}

$list = getUsersList();

function existsUser($list,$login)
{
   $res = false;
   if(in_array($login, $list))
   {
    $res = true;
   }
   return $res;
}

function checkPassword($list,$login, $password)
{
    $res = false;
    if (existsUser($list,$login) && in_array($password, $list))
    {
        $res = true;
    }
    return $res;
}

function getCurrentUser(){
    if(!empty($_SESSION))
    {
        return $_SESSION['login'];
    }
    else
    {
        return null;
    }
}



