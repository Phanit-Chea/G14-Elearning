<?php
session_start();
require "../../database/database.php";
require "../../models/cart.model.php";

$courses_id = $_GET['id'];
$user_id = $_SESSION['user']['user_id'];
$coruses = getCart($user_id);
$isCourses = true;
foreach ($coruses as $key => $value) {
    if($courses_id == $value['courses_id']){
        $isCourses = false;
    }
}

if($isCourses){
    createCart( $user_id, $courses_id);
}else{
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
