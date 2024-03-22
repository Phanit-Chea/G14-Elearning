<?php 
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
}
require("views/student/student_course.view.php");
?>