<?php
require 'database/database.php';
require 'models/trainer.model.php';
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}

require 'views/trainers/trainer_manage_lesson.view.php';
