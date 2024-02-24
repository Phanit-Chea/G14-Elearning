<?php
require("database/database.php");
require("models/trainer.model.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $course_name = $_POST['course_name'];
    $string_course_duration = $_POST['course_duration'];
    $course_duration = intval($string_course_duration);
    $string_course_price = $_POST['course_price'];
    $course_price = intval($string_course_price);
    $string_course_category = $_POST['course_category'];
    $course_category = intval($string_course_category);
    $string_user_id = $_POST['teacher'];
    $user_id = intval($string_user_id);
    $course_description = $_POST['description'];

    global $newname;
    if (isset($_FILES['course_image'])) {
        $course_image = $_FILES['course_image'];
        $imagename = $course_image['name'];
        $tmppath = $course_image['tmp_name'];
        $img_erro = $course_image['error'];
        $ext = pathinfo($imagename, PATHINFO_EXTENSION);
        $newname = uniqid("", true) . "." . $ext;
        $direct = "assets/images/avatar/" . $newname;
        if ($img_erro == 0) {
            move_uploaded_file($tmppath, $direct);
        }
    }


    create_course($course_name, $course_duration, $course_price, $user_id, $course_category, $course_description, $newname);
}
require("views/trainers/trainer_manage_course.view.php");
