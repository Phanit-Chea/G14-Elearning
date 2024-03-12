<?php
require("../../database/database.php");
require("../../models/trainer.model.php");


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $course_name = $_POST['course_name'];
    $course_duration = intval($_POST['course_duration']);
    $course_price = intval($_POST['course_price']);
    $course_id = intval($_POST['course_id']);
    $course_category = intval($_POST['course_category']);
    $course_description = $_POST['description'];

    $direct = '';
    $newname = '';
    $existing_image = ''; // Variable to store the existing image path

    if (isset($_FILES['course_image'])) {
        $course_image = $_FILES['course_image'];
        $imagename = $course_image['name'];
        $tmpPath = $course_image['tmp_name'];
        $imgError = $course_image['error'];
        $ext = pathinfo($imagename, PATHINFO_EXTENSION);
        $newname = uniqid("", true) . "." . $ext;
        $uploadDir = "../../assets/images/courses/4by3/"; // Update this with the desired directory path
        $direct = $uploadDir . $newname;
        if ($imgError === 0) {
            move_uploaded_file($tmpPath, $direct);
            $existing_image = $direct; // Update the existing image path with the new image path
        }
    }

    $vd_upload_path = '';
    $new_vd_lc = '';

    if (isset($_FILES['course_video'])) {
        $video_course = $_FILES['course_video'];
        $vd_name = $video_course['name'];
        $tmp_name = $video_course['tmp_name'];
        $error = $video_course['error'];

        if ($error === 0) {
            $vd_ex = pathinfo($vd_name, PATHINFO_EXTENSION);
            $vd_ex_lc = strtolower($vd_ex);
            $allowed_exs = array('mp4', 'webm', 'avi', 'flv');
            if (in_array($vd_ex_lc, $allowed_exs)) {
                $new_vd_lc = uniqid("video-", true) . '.' . $vd_ex_lc;
                $vd_upload_path = '../../assets/images/videos/' . $new_vd_lc;
                move_uploaded_file($tmp_name, $vd_upload_path);
            }
        }
    }

    if ((!empty($course_id)) && (!empty($course_name)) && (!empty($course_category)) && (!empty($course_price)) && (!empty($course_description)) && (!empty($course_duration))) {
        update_course($course_id, $course_name, $course_duration, $course_price, $course_category, $course_description);
    }
    if (!empty($new_vd_lc)) {
        update_video($course_id, $new_vd_lc);
    }
    if (!empty($existing_image)) {
        update_image($course_id, $newname); // Update the image path only if a new image is uploaded
    }
    header("Location: /trainer_manage_course");
}
