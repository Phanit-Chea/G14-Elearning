<?php
session_start();
require "../../../database/database.php";
require "../../../models/admin.model.php";

$id = isset($_POST['id'])  ? $_POST['id'] : null;
if($id){
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $userId = isset($_SESSION['user']) ? $_SESSION['user']['user_id'] : '';
    $category = getCategory($id);

    $file_name = $category['category_image'];
    var_dump($_FILES["image"]);
    if (!empty($_FILES["image"]['name'])) {
        $image = $_FILES["image"];
        $file_name = $image["name"];
        $target_path = "../../../assets/images/categories/". $file_name;
        move_uploaded_file($image["tmp_name"], $target_path);
    }
    updateCategory($name,  $file_name, $description, $id);
    header('Location: /trainer_manage_category');
}
 
?>