<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/trainers' => 'controllers/trainers/trainer.controller.php',
    '/student_view_course' => 'controllers/students/student_view_course.controller.php',
    '/signin' => 'controllers/signin/signin.controller.php',
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

if (urlIs('/')){
    require "layouts/navbar.php";
}
?>