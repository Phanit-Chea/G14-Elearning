<?php
session_start();
require "../../database/database.php";
require "../../models/user.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $role_id = isset($_GET['role'])?$_GET['role']:null;
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $code = password_hash($password, PASSWORD_BCRYPT);

    $user = get_values_from_input($email);
    if (count($user) == 0) {
        if (isset($_FILES)) {
            var_dump($_FILES);
            $file = $_FILES['image'];
            $imagename = $file['name'];
            $tmppath = $file['tmp_name'];
            $img_erro = $file['error'];
            $ext = explode(".", $imagename)[1];
            $newname = uniqid("", $newname) .".". $ext;
            $direct = "../../assets/images/avatar/" . $newname;
            if ($img_erro == 0) {
                move_uploaded_file($tmppath, $direct);
            }
        }
        $_SESSION['login'] = 'login';
        if($role_id){
            $isCreate =  createAccount($username, $email, $code, $newname, $role_id);
            header('Location: /');
        }else{
            $isCreate =  createAccount($username, $email, $code, $newname,2 );
            header('Location: /');
        }
       
    } else {
        echo 'account already exits';
    }
}

