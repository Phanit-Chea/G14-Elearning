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
        Page Banner START -->
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
        Page Banner END -->

    <!-- =======================
        Page content START -->
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
                                        <a class="list-group-item " href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                                        <a class="list-group-item" href="/trainer_manage_orders"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>

                                        <a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                        <a class="list-group-item active" href="/trainer_manage_payout"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>

                                        <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
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

                    <!-- Payout box START -->
                    <div class="row g-4 mb-4">
                        <!-- Box item -->
                        <div class="col-sm-6 col-md-4">
                            <div class="border p-3 rounded-3 h-100">
                                <div class="d-flex mb-1 justify-content-between align-items-center">
                                    <h6 class="mb-0">Last month payout</h6>
                                    <span class="badge bg-success bg-opacity-10 text-success ms-2 mb-0">Paid</span>
                                </div>
                                <h2 class="mb-2 mt-2">$12,825</h2>
                                <a href="#">View transaction</a>
                            </div>
                        </div>

                        <!-- Box item -->
                        <div class="col-sm-6 col-md-4">
                            <div class="border p-3 rounded-3 h-100">
                                <h6 class="mb-0">This month earning</h6>
                                <h2 class="mb-2 mt-2">$15,356</h2>
                                <p class="mb-0">Expected payout on 05/08/2021</p>
                            </div>
                        </div>

                        <!-- Box item -->
                        <div class="col-sm-6 col-md-4">
                            <div class="bg-primary bg-opacity-10 h-100 p-3 rounded-3">
                                <h6 class="mb-0">Balance</h6>
                                <h2 class="mb-2 mt-2">$8,485</h2>
                                <a href="#" class="btn btn-sm btn-primary mb-0">Withdraw Earning</a>
                            </div>
                        </div>
                    </div>
                    <!-- Payout box END -->

                    <div class="card border rounded-3">
                        <!-- Card header START -->
                        <div class="card-header border-bottom">
                            <h3 class="mb-0">Payouts</h3>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">

                            <!-- Title and select START -->
                            <div class="row g-3 align-items-center justify-content-between mb-4">
                                <!-- Content -->
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
                            <!-- Title and select END -->

                            <!-- Payout list table START -->
                            <div class="table-responsive border-0">
                                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                    <!-- Table head -->
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Payout</th>
                                            <th scope="col" class="border-0">Amount</th>
                                            <th scope="col" class="border-0">Status</th>
                                            <th scope="col" class="border-0 rounded-end">Date</th>
                                        </tr>
                                    </thead>
                                    <!-- Table body START -->
                                    <tbody>
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout
                                                        #102356</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>$3,999
                                                <!-- Drop down with id -->
                                                <a href="#" class="h6 mb-0" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Commission</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>
                                                    <!-- Divider -->

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="me-4 small">Us royalty withholding</span>
                                                            <span class="text-danger small">-$0.00</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Earning</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">
                                                <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>18/8/2021</td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <!-- Title -->
                                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout
                                                        #102589</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>$4,875
                                                <!-- Drop down with id -->
                                                <a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Commission</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>
                                                    <!-- Divider -->

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="me-4 small">Us royalty withholding</span>
                                                            <span class="text-danger small">-$0.00</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Earning</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">
                                                <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>12/8/2021</td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout
                                                        #108645</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>$1,800
                                                <!-- Drop down with id -->
                                                <a href="#" class="h6 mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Commission</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>
                                                    <!-- Divider -->

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="me-4 small">Us royalty withholding</span>
                                                            <span class="text-danger small">-$0.00</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Earning</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">
                                                <span class="badge bg-danger bg-opacity-10 text-danger">Cancelled
                                                </span>
                                            </td>

                                            <!-- Table data -->
                                            <td>22/8/2021</td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout
                                                        #108645</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>$6,800
                                                <!-- Drop down with id -->
                                                <a href="#" class="h6 mb-0" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Commission</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>
                                                    <!-- Divider -->

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="me-4 small">Us royalty withholding</span>
                                                            <span class="text-danger small">-$0.00</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Earning</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">
                                                <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>28/8/2021</td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <!-- Title -->
                                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout
                                                        #108645</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>$3,576
                                                <!-- Drop down with id -->
                                                <a href="#" class="h6 mb-0" role="button" id="dropdownShare4" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare4">
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Commission</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>
                                                    <!-- Divider -->

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="me-4 small">Us royalty withholding</span>
                                                            <span class="text-danger small">-$0.00</span>
                                                        </div>
                                                        <hr class="my-1">
                                                    </li>

                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="small">Earning</span>
                                                            <span class="h6 mb-0 small">$86</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">
                                                <span class="badge bg-orange bg-opacity-10 text-orange">Pending</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>12/8/2021</td>
                                        </tr>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Payout list table END -->

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
                    <!-- Payout END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Page content END -->

</main>


</body>