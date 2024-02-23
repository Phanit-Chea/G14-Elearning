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
    if(count($user)>0){
            if(password_verify($password,$user['password'])){

                $_SESSION['login'] = 'login';
                header('Location: /admin');
            }else{
                echo "wrong password";  

            }
    }else{
        echo "wrong email";
    }
}

