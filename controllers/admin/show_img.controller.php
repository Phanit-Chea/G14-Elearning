<?php
// session_start();
require "../../database/database.php";
require "../../models/admin.model.php";

$_SESSION['showImg'] = getCategory($_GET['id'])['category_image'];

$_SESSION['j'] = 'hello';

echo $_SESSION['showImg'];

// header('Location: /admin_categories');
