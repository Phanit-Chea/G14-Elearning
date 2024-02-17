<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin") || urlIs("/admin_user") || urlIs("/admin_categories") || urlIs("/admin_student_history")) { 
    require "admin_router.php";
} else if (urlIs('/signin') || urlIs('/signup')) {
    require "authentication_router.php";
}else{
    require 'router.php';
}


