<?php 
require "../../../database/database.php";
require "../../../models/admin.model.php";
$id = $_GET['id'];
var_dump($id);
if (isset($_GET['id'])) {
    deleteUser($id);
}
header('Location: /admin_user');