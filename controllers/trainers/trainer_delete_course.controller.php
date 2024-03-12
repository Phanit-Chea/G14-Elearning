<?php
require 'database/database.php';
require 'models/trainer.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['course_id'])) {
        delete_course($_POST['course_id']);
        header("Location: /trainer_manage_course");
        exit();
    }
}
?>