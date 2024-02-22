<?php
require "../../../database/database.php";
require "../../../models/admin.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $userId = 3;
    
    addCate($name, $description, $userId);
    header("location: /admin_categories");
}

