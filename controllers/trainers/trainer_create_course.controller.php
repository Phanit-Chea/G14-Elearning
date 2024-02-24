<?php
require("../../database/database.php");
require("../../models/trainer.model.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $course_name = $_POST['course_name'];
    $course_duration = $_POST['course_duration'];
    $course_price = $_POST['course_price'];
    $course_image = $_POST['course_image'];
    $course_category = $_POST['course_category'];
    global $newname;
    if (isset($_FILES)) {
        $course_image = $_FILES['course_image'];
        $imagename = $course_image['name'];
        $tmppath = $course_image['tmp_name'];
        $img_erro = $course_image['error'];
        $ext = explode(".", $imagename)[1];
        $newname = uniqid("", $newname) .".". $ext;
        $direct = "assets/images/avatar/" . $newname;
        if ($img_erro == 0) {
            move_uploaded_file($tmppath, $direct);
        }
    }
    header("location : /trainer_manage_course");

}

