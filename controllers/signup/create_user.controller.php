<?php
session_start();
require "../../database/database.php";
require "../../models/user.model.php";
$_SESSION['duplicate']="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role_id = isset($_GET['role']) ? $_GET['role'] : null;
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $user = [];
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
            $newname = uniqid("", $newname) . "." . $ext;
            $direct = "../../assets/images/avatar/" . $newname;
            if ($img_erro == 0) {
                move_uploaded_file($tmppath, $direct);
            }
        }

        $_SESSION['login'] = 'login';
        if ($role_id) {
            $isCreate =  createAccount($username, $email, $code, $newname, $role_id);
            $user['role_id'] = $role_id;
            $_SESSION['user'] = $user;
            header('Location: /admin');
        } else {
            $isCreate =  createAccount($username, $email, $code, $newname, 2);
            $user['image'] = $newname;
            $user['role_id'] = 2;
            $_SESSION['user'] = $user;
            header('Location: /');
            $_SESSION['duplicate']="";

        }
    } else {
        // echo 'account already exits';
        $_SESSION['duplicate']="your email is duplicate";
        header("Location:/signup");

    }
}
