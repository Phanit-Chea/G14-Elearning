<?php
require("../../database/database.php");
require("../../models/trainer.model.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $course_name = $_POST['course_name'];
    $course_duration = intval($_POST['course_duration']);
    $course_price = intval($_POST['course_price']);
    $course_category = intval($_POST['course_category']);
    $user_id = intval($_POST['user_id']);
    $course_description = $_POST['description'];
    $newname = '';

    if (isset($_FILES['course_image'])) {
        $course_image = $_FILES['course_image'];
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

    if (isset($_FILES['course_video'])) {
        $vd_name = $_FILES['course_video']['name'];
        $tmp_vd_name = $_FILES['course_video']['tmp_name'];
        $error = $_FILES['course_video']['error'];
        $vd_upload_path = '';

        if ($error === 0) {
            $vd_ex = pathinfo($vd_name, PATHINFO_EXTENSION);
            $vd_ex_lc = strtolower($vd_ex);
            $allowed_exs = array('mp4', 'webm', 'avi', 'flv');

            if (in_array($vd_ex_lc, $allowed_exs)) {
                echo "yes";
                $new_vd_lc = uniqid('video-', true) . '.' . $vd_ex_lc;
                $vd_upload_path = '../../assets/images/videos/' . $new_vd_lc;
                move_uploaded_file($tmp_vd_name, $vd_upload_path);
            }
        }
    }

    echo $course_name . "<br>";
    echo $course_duration . "<br>";
    echo $course_price . "<br>";
    echo $user_id . "<br>";
    echo $newname . "<br>";
    echo $new_vd_lc . "<br>";

    create_course($course_name, $course_duration, $course_price, $user_id, $course_category, $course_description, $newname, $new_vd_lc);
    header("Location: /trainer_manage_course");
    exit();
}
