<?php
require 'views/trainers/trainer_edit_profile.view.php';
require '../../database/database.php';
require '../../models/trainer.model.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    edit_profile($username, $email, $image, $id) ;
    header("location: /trainer_dashboard");
}