<?php
require 'models/trainer.model.php';
require 'database/database.php';
if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"]["username"];
    $profileImage = $_SESSION['user']['image'];
    $email = $_SESSION["user"]["email"];
}
require 'views/trainers/trainer_edit_profile.view.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    $password = $_POST['password'];
    edit_profile($username, $email, $image, $password, $id) ;
    header("location: /trainer_dashboard");
}