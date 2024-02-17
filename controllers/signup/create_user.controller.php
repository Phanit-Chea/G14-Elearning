<?php 
require "../../database/database.php";
require "../../models/user.model.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $code = password_hash($password, PASSWORD_BCRYPT);

        $user = get_values_from_input($email);
        if(count($user)==0){
            $isCreate =  createAccount($username,$email, $code );
            header('Location: /signin');
        }else{
            echo 'account already exits';
        }
    }
 

