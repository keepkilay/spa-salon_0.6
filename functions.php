<?php
session_start();
    //1.Для начала создайте несколько полезных функций и выделите их в отдельный файл:
function getUsersList() { //1) Функция, которая возвращает массив всех пользователей и хэш паролей
    return
    [
        ['login' => 'Петя', 'password' => '$2y$10$uYa/0Jyv/btDSVSQKJ3eg.YA1dSmYj3Mzf9LIh4rR.v3rCJGhrCBy'],//123 - пароль и хэш
        ['login' => 'Алексей', 'password' => '$2y$10$Yd71HHyKqNV/1EJybM3kB.xYIlBPJ5vVGYDeTXT8MMjqfXP9hgiEq'],//345
        ['login' => 'Андрей', 'password' => '$2y$10$AzlC.eOJaZ5KGADoXTSvaeX1aZ/8P/WILYsHoiWRgRog3.ProOpnG'],//567
        ['login' => 'Вася', 'password' => '$2y$10$689N6dAPVsJ.0zG3klxZju7IBaOIGmMMf8XgA29pfrEHW6jFqsc2e'],//789
        ['login' => 'Анна', 'password' => '$2y$10$82MtEEUp78xnstnj0xEoGO4GGRGb4bvA324AQWFTYv8EUia/cN7fS'],//891
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

