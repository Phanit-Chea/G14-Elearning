<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-black navbar-dark">
        <a href="/" class="navbar-brand mx-4 mb-3 d-flex">
            <h3 class="text-primary">
                <i class="fa fa-user-edit me-2"></i>
                    <span style="margin-left: 10px;">Elearning</span>
            </h3>
        </a>
        <div class="navbar-nav w-100">
            <a href="/admin" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/admin_categories" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Categories</a>
            <a href="/admin_user" class="nav-item nav-link"><i class="fa fa-user me-2"></i>User</a>
            <a href="/admin_student_history" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Students history</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/trainers" class="dropdown-item">Trainer</a>
                    <a href="/student" class="dropdown-item">Student</a>
                    <a href="/" class="dropdown-item">Home</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
<?php

?>
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="/signin" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>