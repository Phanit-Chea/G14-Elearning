<?php
require "../../database/database.php";
require "../../models/user.model.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    $user = get_values_from_input($email);
    if(count($user)>0){
            if(password_verify($password,$user['password'])){
                echo "yes";
            }else{
                echo "wrong password";   
            }
    }else{
        echo "wrong email";
    }
}