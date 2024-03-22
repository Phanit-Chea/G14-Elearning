<?php
require ("./database/database.php");
require ("./models/trainer.model.php");
var_dump($_POST);
var_dump($_FILES);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['lesson_id'];
    $title = $_POST['lesson_title'];
    $course = $_POST['lesson_course'];
    $image = $_FILES['lesson_image'];
    $new_lesson_description = $_POST['lesson_description'];
    edit_lesson($id, $title, $new_lesson_description, $image["name"]);
    // header("location: /trainer_manage_lesson");
}


$newname = '';
if (isset ($_FILES['image'])) {
    $course_image = $_FILES['image'];
    $imagename = $course_image['name'];
    $tmppath = $course_image['tmp_name'];
    $img_error = $course_image['error'];
    $ext = pathinfo($imagename, PATHINFO_EXTENSION);
    $newname = uniqid("", true) . "." . $ext;
    $direct = "../../assets/images/courses/4by3/" . $newname;
    if ($img_error == 0) {
        move_uploaded_file($tmppath, $direct);
    }
}
