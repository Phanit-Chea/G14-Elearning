<?php
session_start();
require 'layouts/trainer/navbar.php';
require 'models/trainer.model.php';
require 'models/select_cetagory.php';
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
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?> " alt="">
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <h1 class="my-1 fs-4"><?php echo $username; ?><i class="bi bi-patch-check-fill text-info small"></i></h1>
                                    <ul class="list-inline mb-0">

                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i><?php echo (total_course($user_id)); ?> Courses</li>

                                    </ul>
                                </div>
                                <!-- Button created video for trainer -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-modal">
                                    Create Video
                                </button>
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
                                        <a class="list-group-item" href="/trainer_dashboard"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                        <a class="list-group-item" href="/trainer_manage_category"><i class="bi bi-basket fa-fw me-2"></i>My Category</a>
                                        <a class="list-group-item" href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                        <a class="list-group-item " href="/trainer_manage_lesson"><i class="bi bi-basket fa-fw me-2"></i>My Lessons</a>
                                        <a class="list-group-item active" href="/trainer_manage_video"><i class="bi bi-basket fa-fw me-2"></i>My Video</a>
                                        <a class="list-group-item" href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                                        <a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
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
                <!-- ============================================================== -->
                <div class="col-xl-9 d-flex" style="display:flex;flex-wrap:wrap">
                    <?php
                    $creatVideo = getAllvideo();
                    foreach ($creatVideo as $key => $value) :
                        $videoShow = "assets/images/videos/" . $value['file_path'];
                    ?>
                        <div class="card" style="width: 16rem; margin-right:10px;">
                            <video controls>
                                <source src="<?= $videoShow; ?>">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title"><?= $value['video_name'] ?>
                                    <a href="#?id=<?= $value['video_id'] ?>" data-bs-toggle="modal" data-bs-target="#edit<?= $value['video_id'] ?>" class="btn "><i class="bi bi-pencil-square"></i></a>
                                    <a href="controllers/trainers/trainer_delete_videos.controller.php?id=<?= $value['video_id'] ?>" class="btn" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></a>
                                    <style>
                                        .btn:hover {
                                            background-color: #13d288;
                                            border: none;
                                        }
                                    </style>
                                </h5>
                                <!-- <p class="card-text">Some title and make up the</p> -->
                            </div>
                        </div>
                        <div class="modal fade" id="edit<?= $value['video_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-secondary">
                                    <div class="modal-header ">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Course</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="controllers/trainers/trainer_update_video.controller.php?id=<?php echo $value['video_id']; ?>&image=<?php echo $value['file_path']; ?>" method="POST" enctype="multipart/form-data" class="w-100">
                                            <div class="form-group mt-3">
                                                <!-- <input type="hidden" name="id" value=""> -->
                                                <input type="text" class="form-control bg-white" name="course_name" placeholder="course_name" value="<?= $value['video_name'] ?>" required>
                                            </div>
                                            <div class="form-group mt-1">
                                                <label for="course_category">Course category</label>
                                                <select class="form-select mt-3" aria-label="Default select example" name="course_category" id="course_category" required>
                                                    <option selected>Select categories</option>
                                                    <?php
                                                    $categories = select_lesson($user_id);
                                                    foreach ($categories as $category) :
                                                    ?>
                                                        <option value="<?php echo $category['lesson_id'] ?>"><?php echo $category['title'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="course_video" placeholder="Course Video" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary m-4">Save</button>
                                            <button class="btn btn-danger m-4" id="modal" data-bs-dismiss="modal">cancel</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
        <!-- popup for create video -->
        <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-secondary">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Create Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="controllers/trainers/trainer_watch_video.controller.php" method="POST" enctype="multipart/form-data" class="w-100">
                            <div class="form-group mt-3">
                                <!-- <input type="hidden" name="id" value=""> -->
                                <input type="text" class="form-control bg-white" name="course_name" placeholder="course_name" value="" required>
                            </div>
                            <div class="form-group mt-1">
                                <label for="course_category">Course category</label>
                                <select class="form-select mt-3" aria-label="Default select example" name="course_category" id="course_category" required>
                                    <option selected>Select categories</option>
                                    <?php
                                    $categories = select_lesson($user_id);
                                    foreach ($categories as $category) :
                                    ?>
                                        <option value="<?php echo $category['lesson_id'] ?>"><?php echo $category['title'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="course_video" placeholder="Course Video" required>
                            </div>
                            <button type="submit" class="btn btn-primary m-4">Create</button>
                            <button class="btn btn-danger m-4" id="modal" data-bs-dismiss="modal">cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of created videos -->
        <!-- popup for update videos -->

    </section>
    <!-- =======================
        Inner part END -->
</main>
</body>