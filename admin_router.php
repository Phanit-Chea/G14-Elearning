<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php',
    '/trainer-review' => 'controllers/reviews/review.controller.php',
    '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',
    '/admin_user' => 'controllers/admin/admin_user.controller.php',
    '/admin_categories' => 'controllers/admin/admin_categories.controller.php',
    '/add_category' => 'controllers/admin/category/category.controller.php',
    '/admin_student_history' => 'controllers/admin/admin_student_history.controller.php',
    '/signin' => 'controllers/signin/signin.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";