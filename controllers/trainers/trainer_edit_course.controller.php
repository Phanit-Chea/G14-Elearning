<?php
require("database/database.php");
require("models/trainer.model.php");

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}
if (isset($_POST['course_id'])) {
    $id = $_POST['course_id'];
    course_info($id);
}
require("views/trainers/trainer_edit_course.view.php");
