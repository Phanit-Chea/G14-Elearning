<?php
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}
require "views/trainers/trainer_dashboard.view.php";
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}
?>