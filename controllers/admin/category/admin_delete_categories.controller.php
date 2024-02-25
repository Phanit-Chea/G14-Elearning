<?php
require "../../../database/database.php";
require "../../../models/admin.model.php";


$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    deleteCategory($id);
    header('Location: /admin_categories');
}