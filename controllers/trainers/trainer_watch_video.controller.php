<?php
require("../../database/database.php");
require("../../models/trainer.model.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = $_POST['course_name'];
    $description = $_POST['description'];
    echo $description;
    echo $courseName;

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
                $new_vd_lc = uniqid('video-', true) . '.' . $vd_ex_lc;
                $vd_upload_path = '../../assets/images/videos/' . $new_vd_lc;
                move_uploaded_file($tmp_vd_name, $vd_upload_path);

                // Display the video
                insert_video($new_vd_lc, $courseName);
                header('location: /trainer_manage_video');
           
            }
        }
    }
}
?>



