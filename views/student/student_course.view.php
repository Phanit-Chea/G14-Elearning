<?php
require 'layouts/student_course/navbar.php';
require 'models/store_course_student.php';
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
                                
                                        <a class="list-group-item" href="/student"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment info</a>
                                        <a class="list-group-item" href="/student_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- ====================display image course after user buy courses========================================== -->

                <div class="col-xl-9 d-flex" style="display:flex;flex-wrap:wrap">
                    <?php
                    $card_course = store_course_student($_SESSION['user']['user_id']);
                    foreach ($card_course as $cards) :
                    ?>
                        <div class="card" style="width: 16rem; margin-right:10px;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $cards['course_name'] ?>
                                    <img src="assets/images/courses/4by3/<?= $cards['course_image'] ?>" class="card-img-top" alt="...">
                                </h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- ============================================================== -->
                <!-- Pagination START -->
            </div>
        </div>

    </section>
</main>
</body>