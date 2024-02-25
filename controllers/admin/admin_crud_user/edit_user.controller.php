<?php
require "../../../database/database.php";
require "../../../models/admin.model.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    updateUser($username, $email,$id) ;
    header("location: /admin_user");
}
