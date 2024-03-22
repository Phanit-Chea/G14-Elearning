<?php
require 'models/trainer.model.php';
require 'database/database.php';
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}
require ("views/trainers/trainer_manage_students.view.php");
?>