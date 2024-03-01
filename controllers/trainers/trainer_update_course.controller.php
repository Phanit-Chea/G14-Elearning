<?php
require("../../database/database.php");
require("../../models/trainer.model.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $course_name = $_POST['course_name'];
    $course_duration = intval($_POST['course_duration']);
    $course_price = intval($_POST['course_price']);
    $course_category = intval($_POST['course_category']);
    $course_id = intval($_POST['course_id']);
    $course_description = $_POST['description'];

    $direct='';
    $newname = '';
    if (isset($_FILES['course_image'])) {
        $course_image = $_FILES['course_image'];
        $imagename = $course_image['name'];
        $tmpPath = $course_image['tmp_name'];
        $imgError = $course_image['error'];
        $ext = pathinfo($imagename, PATHINFO_EXTENSION);
        $newname = uniqid("", true) . "." . $ext;
        $uploadDir = "assets/images/courses/4by3/"; // Update this with the desired directory path
        $direct = $uploadDir . $newname;
        if ($imgError === 0) {
            move_uploaded_file($tmpPath, $direct);
        }
    }
    echo $direct;
    if (!empty($course_name) && !empty($course_duration) && !empty($course_price) && !empty($course_id) && !empty($course_category) && !empty( $newname)) {
        update_course($course_name, $course_duration, $course_price, $course_category, $course_description,    $newname, $course_id);
        header("location: /trainer_manage_course");
        exit();
    };
}
