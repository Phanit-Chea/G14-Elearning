<?php 
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
}
require 'views/student/student_information.view.php';
?>