<?php
require("../../database/database.php");
require("../../models/trainer.model.php");
// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $course_name = $_POST['course_name'];
//     $course_duration = intval($_POST['course_duration']);
//     $course_price = intval($_POST['course_price']);
//     $course_category = intval($_POST['course_category']);
//     $course_id = intval($_POST['course_id']);
//     $course_description = $_POST['description'];

//     $newname = '';
//     if (isset($_FILES['course_image'])) {

//         $course_image = $_FILES['course_image'];
//         $imagename = $course_image['name'];
//         $tmppath = $course_image['tmp_name'];
//         $img_error = $course_image['error'];
//         $ext = pathinfo($imagename, PATHINFO_EXTENSION);
//         $newname = uniqid("", true) . "." . $ext;
//         $direct = "../../assets/images/courses/4by3/" . $newname;
//         if ($img_error == 0) {
//             move_uploaded_file($tmppath, $direct);
//         }
//     };

//     // if (!empty($course_name) && !empty($course_duration) && !empty($course_price) && !empty($course_id) && !empty($course_category) && !empty($newname)) {
//     //     // update_course($course_name, $course_duration, $course_price, $course_category, $course_description, $newname, $course_id);
//     //     // header("Location: /trainer_manage_course");
//     //     echo "yes";
//     //     // exit();
//     // };

//     // echo $course_category;
//     // echo "   ";
//     // echo $course_name;
//     // echo "          ";
//     // echo $course_description;
//     // echo "         ";
//     // echo $course_price;
//     // echo "             ";
//     // echo $course_duration;
//     // echo "         ";
//     echo $newname;
//     echo "      ";

//     if (!empty($course_name) && !empty($course_duration) && !empty($course_price) && !empty($course_category) && !empty($course_id) && !empty($newname) && !empty($course_description)) {
//         echo "yes";
//     }
// };

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $course_name = $_POST['course_name'];
    $course_duration = intval($_POST['course_duration']);
    $course_price = intval($_POST['course_price']);
    $course_category = intval($_POST['course_category']);
    $course_id = intval($_POST['course_id']);
    $course_description = $_POST['description'];

    $newname = '';
    if (isset($_FILES['course_image'])) {
        $course_image = $_FILES['course_image'];
        $imagename = $course_image['name'];
        $tmppath = $course_image['tmp_name'];
        $img_error = $course_image['error'];
        $ext = pathinfo($imagename, PATHINFO_EXTENSION);
        $newname = uniqid("", true) . "." . $ext;
        $direct = "assets/images/courses/4by3" . $newname;
        if ($img_error == 0) {
            move_uploaded_file($tmppath, $direct);
        }
    };
    if (!empty($course_name) && !empty($course_duration) && !empty($course_price) && !empty($user_id) && !empty($course_category) && !empty($newname)) {
        update_course($course_name, $course_duration, $course_price, $course_category, $course_description, $newname, $course_id);
        header("Location: /trainer_manage_course");
        exit();
    };
}
