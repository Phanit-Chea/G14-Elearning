<?php
require("../../database/database.php");
require("../../models/trainer.model.php");
var_dump($_POST);
var_dump($_FILES);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['lesson_id'];
    $title = $_POST['lesson_title'];
    $course = $_POST['lesson_course'];
    $image = $_FILES['lesson_image'];
    $new_lesson_description = $_POST['lesson_description'];
    edit_lesson($id, $title, $new_lesson_description, $image["name"]);
    header("location: /trainer_manage_lesson");
}
