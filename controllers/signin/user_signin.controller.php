<?php
session_start();
require "../../database/database.php";
require "../../models/user.model.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // echo $password;
    $user = get_values_from_input($email);
    $_SESSION['user']=$user;
    if ($_SESSION['user']['role_id']==3 && $password == '5555'){
        $_SESSION['login'] = 'login';
        header('Location: /admin');
    }
    elseif(count($user)>0){
            if(password_verify($password,$user['password'])){

                $_SESSION['login'] = 'login';
                header('Location: /');
            }else{
                echo "<script>alert('wrong password')</script>";
                header("location:/signin");  
            }
    }else{
        echo "wrong email";
    }
}

