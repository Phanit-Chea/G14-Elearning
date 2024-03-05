<?php
require 'database/database.php';
require 'models/student.model.php';
// var_dump(course_view(88));
$id= $_GET['id'];
get_course($id);
require 'views/courses/course_detail.view.php';
