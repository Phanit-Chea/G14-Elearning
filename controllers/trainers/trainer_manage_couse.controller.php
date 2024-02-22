<?php

require("views/trainers/trainer_manage_course.view.php");
require("models/trainer.model.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_name = $_POST['course_name'];
    $duration = $_POST['course_duration'];
    $course_price = $_POST['course_price'];
    $string_category = $_POST['category'];
    $int_category = intval($string_category);
    $description = $_POST['description'];
    $user_id = 1;
    echo $course_name;
    global $newname;
    if (isset($_FILES)) {
        // var_dump($_FILES);
        $file = $_FILES['course_image'];
        $imagename = $file['name'];
        $tmppath = $file['tmp_name'];
        $img_erro = $file['error'];
        $ext = explode(".", $imagename)[1];
        $newname = uniqid("", $newname) . "." . $ext;
        $direct = "assets/images/avatar" . $newname;
        if ($img_erro == 0) {
            move_uploaded_file($tmppath, $direct);
        };
    };

    create_course($course_name,$duration,$course_price,$user_id,$int_category ,$description ,$newname);
}

