<?php 
require 'layouts/trainer/navbar.php';
 ?>

                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">Lori Ferguson</a>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode switch START -->
                        <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li>
                        <!-- Dark mode switch END -->
                    </ul>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>

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
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Stevens <i class="bi bi-patch-check-fill text-info small"></i></h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled
                                                Students</li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>25 Courses</li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    
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
                                            <a class="list-group-item" href="/trainer_dashboard"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                            <a class="list-group-item" href="/trainer_manage_category"><i class="bi bi-basket fa-fw me-2"></i>My Category</a>
                                            <a class="list-group-item" href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                            <a class="list-group-item" href="/trainer_manage_earning"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                                            <a class="list-group-item active" href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                                            <a class="list-group-item" href="/trainer_manage_orders"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>

                                            <a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                            <a class="list-group-item" href="/trainer_manage_payout"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>

                                            <a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                            <a class="list-group-item text-danger bg-danger-soft-hover" href="sign-in.html"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign
                                                Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Right sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <!-- Card START -->
                        <div class="card border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header border-bottom">
                                <h3 class="mb-0">My Students List</h3>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">

                                <!-- Search and select START -->
                                <div class="row g-3 align-items-center justify-content-between mb-4">
                                    <!-- Search -->
                                    <div class="col-md-8">
                                        <form class="rounded position-relative">
                                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                        </form>
                                    </div>

                                    <!-- Select option -->
                                    <div class="col-md-3">
                                        <!-- Short by filter -->
                                        <form>
                                            <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
                                                <option value="">Sort by</option>
                                                <option>Free</option>
                                                <option>Newest</option>
                                                <option>Oldest</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <!-- Search and select END -->

                                <!-- Student list table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Student name</th>
                                                <th scope="col" class="border-0">Progress</th>
                                                <th scope="col" class="border-0">Courses</th>
                                                <th scope="col" class="border-0">Enrolled date</th>
                                                <th scope="col" class="border-0 rounded-end">Action</th>
                                            </tr>
                                        </thead>

                                        <!-- Table body START -->
                                        <tbody>
                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                            <img src="assets/images/avatar/01.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link">Lori
                                                                    Stevens</a></h6>
                                                            <!-- Address -->
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Mumbai</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <div class=" overflow-hidden">
                                                        <h6 class="mb-0">85%</h6>
                                                        <div class="progress progress-sm bg-primary bg-opacity-10">
                                                            <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>10</td>

                                                <!-- Table data -->
                                                <td>4/9/2021</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                            <img src="assets/images/avatar/03.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link">Dennis
                                                                    Barrett</a></h6>
                                                            <!-- Address -->
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>New
                                                                york</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <div class=" overflow-hidden">
                                                        <h6 class="mb-0">40%</h6>
                                                        <div class="progress progress-sm bg-primary bg-opacity-10">
                                                            <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>12</td>

                                                <!-- Table data -->
                                                <td>9/7/2021</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                                    <button class="btn btn-danger btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Unblock"><i class="fas fa-ban"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                            <img src="assets/images/avatar/04.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link">Billy
                                                                    Vasquez</a></h6>
                                                            <!-- Address -->
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Paris</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <div class=" overflow-hidden">
                                                        <h6 class="mb-0">62%</h6>
                                                        <div class="progress progress-sm bg-primary bg-opacity-10">
                                                            <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>08</td>

                                                <!-- Table data -->
                                                <td>10/5/2021</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                            <img src="assets/images/avatar/09.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link">Carolyn
                                                                    Ortiz</a></h6>
                                                            <!-- Address -->
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Delhi</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <div class=" overflow-hidden">
                                                        <h6 class="mb-0">60%</h6>
                                                        <div class="progress progress-sm bg-primary bg-opacity-10">
                                                            <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>06</td>

                                                <!-- Table data -->
                                                <td>20/4/2021</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                            <img src="assets/images/avatar/07.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link">Larry
                                                                    Lawson</a></h6>
                                                            <!-- Address -->
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>London</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <div class=" overflow-hidden">
                                                        <h6 class="mb-0">35%</h6>
                                                        <div class="progress progress-sm bg-primary bg-opacity-10">
                                                            <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>04</td>

                                                <!-- Table data -->
                                                <td>12/7/2021</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                            <img src="assets/images/avatar/06.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link">Frances
                                                                    Guerrero</a></h6>
                                                            <!-- Address -->
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Pune</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <div class=" overflow-hidden">
                                                        <h6 class="mb-0">42%</h6>
                                                        <div class="progress progress-sm bg-primary bg-opacity-10">
                                                            <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>14</td>

                                                <!-- Table data -->
                                                <td>8/8/2021</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Student list table END -->

                                <!-- Pagination START -->
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                                    <!-- Content -->
                                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
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
                                <!-- Pagination END -->
                            </div>
                            <!-- Card body START -->
                        </div>
                        <!-- Card END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Inner part END -->

    </main>
</body>