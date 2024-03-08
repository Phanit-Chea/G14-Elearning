<?php
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}

require ("views/trainers/trainer_manage_category.view.php");
?>