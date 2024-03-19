<?php
require("database/database.php");
require("models/trainer.model.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
//     $id = $_POST['id'];
//     $title = $_POST['title'];
//     $course = $_POST['course_id'];
//     edit_lesson($title, $course, $id) ;
//     header("location: /trainer_dashboard");
// }

require("views/trainers/trainer_edit_course.view.php");
