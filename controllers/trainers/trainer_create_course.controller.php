<?php
require("views/trainers/trainer_create_course.view.php");
require("models/trainer.model.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_name = $_POST['course_name'];
    $duration = $_POST['duration'];
    $course_price = $_POST['course_price'];
    $category = $_POST['category'];
    $is_created = create_course($course_name, $duration, $course_price, $category);
    if ($is_created) {
        header("location: /trainers");
    } else {
        header("location: /trainer_manage_course");
    };
}
