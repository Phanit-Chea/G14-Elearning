<?php
session_start();
require "../../database/database.php";
require "../../models/user.model.php";
$_SESSION['worngEmail'] = '';
$_SESSION['worngPassword'] = '';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // echo $password;
    $user = get_values_from_input($email);
    $_SESSION['user']=$user;
    if ($_SESSION['user']['role_id']==3 && $password == '5555'){
        $_SESSION['login'] = 'login';
        header('Location: /admin');
        $_SESSION['worngEmail'] = '';
        $_SESSION['worngPassword'] = '';
    }
    elseif(count($user)>0){
            if(password_verify($password,$user['password'])){

                $_SESSION['login'] = 'login';
                header('Location: /');
                $_SESSION['worngEmail'] = '';
                $_SESSION['worngPassword'] = '';
            }else{
                header("location:/signin");
                $_SESSION['worngPassword'] = 'your password is wrong'; 

            }
    }else{
        header("location:/signin"); 
        $_SESSION['worngEmail'] = 'your email is wrong'; 

    }
}

