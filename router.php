<?php
ob_start();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/trainers' => 'controllers/trainers/trainer.controller.php',
    '/trainer_dashboard' => 'controllers/trainers/trainer.dashboard.controller.php',
    '/trainer_manage_course' => 'controllers/trainers/trainer_manage_couse.controller.php',
    '/trainer_create_course' => 'controllers/trainers/trainer_create_course.controller.php',
    '/trainer_manage_students' => 'controllers/trainers/trainer_manage_students.controller.php',
    '/trainer_manage_earning' => 'controllers/trainers/trainer_manage_earning.controller.php',
    '/trainer_create_category' => 'controllers/trainers/trainerr_create_category.controller.php',
    '/trainer_manage_category' => 'controllers/trainers/trainer_manage_category.contoller.php',
    '/trainer_edit_course' => 'controllers/trainers/trainer_edit_course.controller.php',
    '/trainer_edit_profile' => 'controllers/trainers/trainer_edit_profile.controller.php',
    '/trainer_manage_lesson' => 'controllers/trainers/trainer_manage_lesson.controller.php',
    '/trainer_create_course' => 'controllers/trainers/trainer_create_lesson.controller.php',
    '/trainer_edit_lesson' => 'controllers/trainers/trainer_edit_lesson.controller.php',
    '/trainer_manage_video' => 'controllers/trainers/trainer_manage_video.controller.php',
    '/trainer_video_detail' => 'controllers/trainers/trainer_video_detail.controller.php',
    '/trainer_delete_course' => 'controllers/trainers/trainer_delete_course.controller.php',
    '/trainer_delete_lesson' => 'controllers/trainers/trainer_delete_lesson.controller.php',
    '/trainer_view_category' => 'controllers/trainers/trainer_view_category.controller.php',
    '/signup' => 'controllers/signup/signup.controller.php',
    '/signin' => 'controllers/signin/signin.controller.php',
    '/student' => 'controllers/student/student.controller.php',
    '/cart' => 'controllers/cart/cart.controller.php',
    '/student_course' => 'controllers/student/student_course.controller.php',
    '/student' => 'controllers/students/student_information.controller.php',
    '/dashboard_student' => 'controllers/students/student.dashboard.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}
require "layouts/header.php";
require $page;
require "layouts/footer.php";

if (urlIs('/')) {
    require "layouts/navbar.php";
}
