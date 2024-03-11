<?php
session_start();
require "../../database/database.php";
require "../../models/cart.model.php";

$courses_id = $_GET['id'];
$user_id = $_SESSION['user']['user_id'];
createCart( $user_id, $courses_id);
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
