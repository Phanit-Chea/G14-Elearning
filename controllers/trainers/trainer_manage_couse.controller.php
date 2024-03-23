<?php
require("database/database.php");
require("models/trainer.model.php");
require("models/student.model.php");
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}
if (isset($_SESSION['course_id'])) {
    $course_id =  $_SESSION['course_id'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['course_id'])) {
        $course_id = $_POST['course_id'];
        $_SESSION['course_id'] = $course_id;
    }
}
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}
require("views/trainers/trainer_manage_course.view.php");
