<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/signin' => 'controllers/signin/signin.controller.php',
    '/signup' => 'controllers/signup/signup.controller.php',
    '/admin2024*pnc*' => 'controllers/admin/admin_home/login_admin.controller.php',
    // '/trainer-review' => 'controllers/reviews/review.controller.php',
    // '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}
require $page;
