<?php
require 'database/database.php';
require 'models/trainer.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['lesson_id'])) {
        delete_lesson($_POST['lesson_id']);
        header("Location: /trainer_manage_lesson"); 
        exit();
    }
}
?>
