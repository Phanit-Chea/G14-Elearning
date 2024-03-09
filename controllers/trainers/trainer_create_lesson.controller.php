<?php
require '../../database/database.php';
require '../../models/trainer.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lesson_title = $_POST['lesson_title'];
    $lesson_course = intval($_POST['lesson_course']);
    $lesson_description = $_POST['lesson_description'];

    if ((!empty($lesson_title)) && (!empty($lesson_course)) && (!empty($lesson_description))) {
        insert_lesson($lesson_title, $lesson_course, $lesson_description);
        header("Location: /trainer_manage_lesson");
        exit(); // Added an exit() call to stop further execution of the script
    }
}
?>
?>