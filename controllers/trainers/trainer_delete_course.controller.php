<?php
require '../../database/database.php';
require '../../models/trainer.model.php';

if (isset($_GET['id'])) {
    $course_id = intval($_GET['id']);
    delete_course($course_id);
    header("Location: /trainer_manage_course");
};
