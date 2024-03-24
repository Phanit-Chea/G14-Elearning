<?php
require 'database/database.php';
require 'models/student.model.php';
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}

require "views/student/student.view.php";
