<?php 
require_once ("functions.php");
    $errors = [];
    $login = trim($_POST['login']);
    $password = trim($_POST['pass']);


    if(empty($login) || empty($password))
    {
        $errors[] = 'Заполни все поля';
    }
    $findUser = false;
    foreach($list as $user){
        if($user['login']==$login && md5($password) == $user['password']){
            $findUser = $user['login'];
        }
    }
   
    if($findUser == false){
        $errors[] = 'Неверный логин или пароль';
    }
 

    if(empty($errors) && $findUser){
        $_SESSION['user'] = $findUser;
        sleep(2);
    
        header('location:/');
    }else{
        foreach($errors as $error){
            echo $error."<br>";
        }
    }
  


    






