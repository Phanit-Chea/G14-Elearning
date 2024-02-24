<?php
require "../../../database/database.php";
require "../../../models/admin.model.php";


$id = isset($_POST['id'])  ? $_POST['id'] : null;
if($id){
//    $categories = getCategory($id);
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']); 
    // updateCategory($name, $description, $id);

    updateCategory($name,$description, $id);
    header('Location: /admin_categories');
}

