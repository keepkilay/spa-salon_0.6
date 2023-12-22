<?php 
require_once ("functions.php");
    // $userData = [
    //  'email'=>'aboba@hui.su',
    //  'password'=>'1q2w3e4r'
    // ];
    $errors = [];
    $login = trim($_POST['email']);
    $password = trim($_POST['pass']);

    if(empty($login) || empty($password))
    {
        echo $errors[] = 'Заполни все поля';
    }
    if($login != $getUserList['login'] && $password != $getUserList['password']) //возможно вместо getUsersList,
                                                                                   //будет $userData
    {
        echo $errors[] = 'Неверный логин или пароль';
    }
    // if(empty($errors))
    // {   
    //     setcookie('user', 'true', time() + 3600, '/spa-salon4',);
            
    // }
    if ($_COOKIE['user'] == 'true'){
        setcookie('user', 'true', time() - 3600, '/');
    }else{
        setcookie('user', 'true', time() + 3600, '/');
    }
    foreach($errors as $error){
        echo $error."<br>";
    }
    sleep(2);
    header('location:/spa-salon4');


    






