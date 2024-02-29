<?php
require("../../database/database.php");
require("../../models/trainer.model.php");
require "views/trainers/trainer_edit_course.view.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $course = get_course($id);
}

