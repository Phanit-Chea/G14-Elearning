<body>
    <?php

    require 'layouts/navbar.php';
    ?>
    <main>

        <?php
        $is_trainer = '#myModal';
        $display = "none";
        $video = 'none';
        $image = 'none';
        $width_video = "width:1150px;height:60vh";
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user']['user_id'];
            $role = $_SESSION['user']['role_id'];
            if ($role == 2) {
                $display = "block";
                $width_video = "width:700px;height:60vh";
                $image = 'block';
                $video = 'none';
                $course = get_course($course_id);
            } else if ($role == 1 || $role == 3) {
                $display = "none";
                $is_trainer = "";
                $course = get_course($course_id);
                $width_video = "width:1150px;height:70vh";
                $image = 'none';
                $video = 'block';
            }

        ?>

            <!-- Page content START -->
            <section class="pt-3 pt-xl-5">
                <div class="container" data-sticky-container="">
                    <div class="row g-4 mt-5">
                        <div class="col-xl-8">
                            <div class="col-12 ">
                                <div class="video-player rounded-3">
                                    <video controls crossorigin="anonymous" playsinline poster="assets/images/courses/4by3/<?= $course['course_image'] ?>" style="<?= $width_video; ?>">
                                        <source src="assets/images/videos/<?= $course['video_path_file']; ?>" type="video/mp4" size="360" style="<?= $width_video; ?>">
                                        <source src="assets/images/videos/720p.mp4" type="video/mp4" size="720">
                                        <source src="assets/images/videos/1080p.mp4" type="video/mp4" size="1080">
                                        <!-- Caption files -->
                                        <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt.txt" default>
                                        <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt.txt">
                                    </video>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary d-lg-none mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                                    <i class="bi bi-camera-video me-1"></i> Playlist
                                </button>
                            </div>
                            <div class="col-12">
                                <!-- Title -->
                                <h1 class="pt-3 pb-3"><?= $course['course_name'] ?></h1>
                                <!-- Content -->
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-shopping-cart text-warning me-2"></i>Sold</li>
                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-book text-orange me-2"></i><?php echo (count_nb_lesson($course_id)); ?> Lessons</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Course video START -->

                        <div class="col-xl-4" style="display: <?= $display ?>;">
                            <div data-sticky="" data-margin-top="80" data-sticky-for="768">
                                <div class="row g-4">
                                    <div class="col-md-6 col-xl-12">
                                        <!-- Course info START -->
                                        <div class="card card-body border p-4">
                                            <!-- Price and share button -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <!-- Price -->
                                                <h3 class="fw-bold mb-0 me-2">$<?= $course['course_price'] ?></h3>
                                                <!-- Share button with dropdown -->
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-sm btn-light rounded mb-0 small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="mt-3">
                                                <div class="d-grid">
                                                    <a href="controllers/cart/cart.add.controller.php?id=<?= $course_id ?>" class="btn btn-outline-primary">Add to cart</a>
                                                </div>
                                                <div class="d-grid mt-2">
                                                    <a href="controllers/cart/cart.add.controller.php?id=<?= $course_id ?>" class="btn btn-success">Buy now</a>
                                                </div>
                                            </div>
                                            <!-- Divider -->
                                            <hr>

                                            <!-- Title -->
                                            <h5 class="mb-3">This course includes</h5>
                                            <ul class="list-group list-group-borderless border-0">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-book-open text-primary"></i>Lessons</span>
                                                    <span>30</span>
                                                </li>


                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Language</span>
                                                    <span>English</span>
                                                </li>

                                            </ul>
                                            <!-- Divider -->
                                            <hr>

                                            <!-- Instructor info -->
                                            <div class="d-sm-flex align-items-center">
                                                <?php
                                                $trainer = get_name_trainer($course['course_id']);

                                                ?>
                                                <!-- Avatar image -->
                                                <div class="avatar avatar-xl">
                                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/<?= $trainer['image'] ?>" alt="avatar">
                                                </div>
                                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                                    <h5 class="mb-0"><a href="#"><?= $trainer['username'] ?></a></h5>
                                                    <p class="mb-0 small"><?= $trainer['email'] ?></p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                    echo ($video);
                    echo ($display);
                    ?>
                    <div class="col-12">
                        <div class="col-12 pt-3 pb-3">
                            <h4 class="">The lessons in this course</h4>
                            <p class="mb-0">Choose from hundreds of courses from specialist organizations</p>
                        </div>
                        <ul class="nav nav-pills mb-3 pt-3" id="pills-tab" role="tablist">
                            <?php
                            $lessons = get_name_lessons($course_id);
                            $is_select = true;
                            $lesson_id = 0;
                            for ($i = 0; $i < count($lessons); $i++) :
                            ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-home-tab-<?= $lessons[$i]['lesson_id'] ?>" data-bs-toggle="pill" data-bs-target="#pills-home<?= $lessons[$i]['lesson_id'] ?>" type="button" role="tab" aria-controls="pills-home<?= $lessons[$i]['lesson_id'] ?>" aria-selected="<?= $is_select ?>">
                                        <?= $lessons[$i]['title'] ?>
                                    </button>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <?php
                            $lessons = get_name_lessons($course_id);
                            for ($i = 0; $i < count($lessons); $i++) :
                            ?>
                                <div class="tab-pane fade <?= ($i === 0) ? 'show active' : '' ?>" id="pills-home<?= $lessons[$i]['lesson_id'] ?>" role="tabpanel" aria-labelledby="pills-home-tab-<?= $lessons[$i]['lesson_id'] ?>">
                                    <div class="row g-6">
                                        <?php
                                        $videos = get_all_videos($lessons[$i]['lesson_id']);

                                        if (count($videos) != 0) :
                                            for ($j = 0; $j < count($videos); $j++) :
                                        ?>
                                                <div class="col-sm-6 col-lg-4 col-xl-4 ">
                                                    <div class="card shadow h-100">

                                                        <div class="video-player rounded-3">
                                                            <img src="assets/images/courses/4by3/<?= $lessons[$j]['image'] ?>" alt="" style="display: <?= $display ?>;" data-bs-toggle="modal" data-bs-target="<?= $is_trainer ?>">
                                                            <video controls crossorigin="anonymous" playsinline poster="assets/images/courses/4by3/<?= $lessons[$j]['image'] ?>" style="display: <?= $video ?>;">
                                                                <source src="assets/images/videos/<?= $videos[$j]['file_path'] ?>" type="video/mp4" size="360">
                                                                <source src="assets/images/videos/<?= $videos[$j]['file_path'] ?>" type="video/mp4" size="720">
                                                                <source src="assets/images/videos/<?= $videos[$j]['file_path'] ?>" type="video/mp4" size="1080">
                                                                <!-- Caption files -->
                                                                <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt.txt" default>
                                                                <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt.txt">
                                                            </video>
                                                        </div>
                                                        <div class="card-body pb-0 d-flex align-items-center justify-content-center flex-column">
                                                            <h5 class="card-title fw-normal text-center">
                                                                <a href="/" data-bs-toggle="modal" data-bs-target="<?= $is_trainer ?>"><?= $videos[$j]['video_name'] ?></a>
                                                            </h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        <?php else : ?>
                                            <div class="col-12">
                                                <h4>No videos in this lesson</h4>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            <?php endfor; ?>
                        </div>
                    </div>

                </div>
                <div class="modal" tabindex="-1" id="myModal" style="display: <?= $is_trainer ?>;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Warning</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>You need to buy this course!!!!</p>
                            </div>
                            <div class="modal-footer">
                                <form action="/student_view_course" method="post" enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-primary">Okay</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
<?php } ?>


</body>