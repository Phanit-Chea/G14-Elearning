<?php
require 'database/database.php';
require 'models/student.model.php';

 // Add this line to start the session

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $role_type = $_SESSION['user']['role.id'];

} 
if (isset($_SESSION['course_id'])){
    $course_id =  $_SESSION['course_id'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['course_id'])) {
        $course_id = $_POST['course_id'];
        $_SESSION['course_id'] = $course_id;
    }
}


require 'views/courses/course_detail.view.php';
