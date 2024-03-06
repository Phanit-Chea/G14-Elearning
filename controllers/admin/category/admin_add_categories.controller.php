<?php
session_start();
require "../../../database/database.php";
require "../../../models/admin.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $userId = isset($_SESSION['user']) ? $_SESSION['user']['user_id'] : '';

    var_dump($_FILES["image"]);
    if (!empty($_FILES["image"])) {
        $image = $_FILES["image"];
        $file_name = $image["name"];
        $target_path = "../../../assets/images/categories/". $file_name;
        move_uploaded_file($image["tmp_name"], $target_path);
        
        addCate($name, $description, $file_name, $userId);   
    }

    header("location: /admin_categories");
}
