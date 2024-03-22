<?php
require 'layouts/student_course/navbar.php';
?>

<main>

    <!-- =======================
        Main Banner START -->
    <section class="pt-0">
        <!-- Main banner background image -->
        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <!-- Profile banner START -->
                <div class="col-12">
                    <div class="card bg-transparent card-body p-0">
                        <div class="row d-flex justify-content-between">
                            <!-- Avatar -->
                            <div class="col-auto mt-4 mt-md-0">
                                <div class="avatar avatar-xxl mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?> " alt="">
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $user_id = $_SESSION['user']['user_id'];
                                }
                                ?>
                                <div>
                                    <h1 class="my-1 fs-4"><?php echo $username; ?><i class="bi bi-patch-check-fill text-info small"></i></h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled
                                            Students</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>25 Courses</li>
                                    </ul>
                                </div>
                                <!-- Button created video for trainer -->
                                <!-- end of popup  -->
                            </div>
                        </div>
                    </div>
                    <!-- Profile banner END -->

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Main Banner END -->

    <!-- =======================
        Inner part START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Right sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <nav class="navbar navbar-light navbar-expand-xl mx-0">
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header bg-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-3 p-xl-0">
                                <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                    <!-- Dashboard menu -->
                                    <div class="list-group list-group-dark list-group-borderless">
                                        <a class="list-group-item active" href="#"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                        <a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment info</a>
                                        <a class="list-group-item" href="/student_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                        <a class="list-group-item" href="student-bookmark.html"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
                                        <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                        <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                        <a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- ============================================================== -->
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-body text-success">
                        <h5 class="card-title">Card title</h5>
                        <img src="../../assets/images/avatar/65e35a551d03f7.05234186.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </section>
</main>
</body>