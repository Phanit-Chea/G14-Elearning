<?php
require("database/database.php");
require("models/trainer.model.php");
$students = get_students_list();
require ("views/trainers/trainer_manage_students.view.php");
?>