<?php
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}
require("database/database.php");
require("models/trainer.model.php");
require("views/trainers/trainer_manage_course.view.php");
