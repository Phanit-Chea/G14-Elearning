<body>
    <?php

    require 'layouts/navbar.php';
    ?>
    <main>

        <?php
        $display = "none";
        $width_video = "width:1150px;height:60vh";
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user']['user_id'];

            $role = $_SESSION['user']['role_id'];
            if ($role == 2) {
                $display = "block";
                $width_video = "width:700px;height:60vh";
                $course = get_course($course_id);
            } else if ($role == 1 || $role == 3) {
                $display = "none";
                $course = get_course($course_id);
                $width_video = "width:1150px;height:70vh";
            }

        ?>

            <!-- Page content START -->
            <section class="pt-3 pt-xl-5">
                <div class="container" data-sticky-container="">
                    <div class="row g-4 mt-5">
                        <div class="col-xl-8">
                            <div class="col-12 ">
                                <div class="video-player rounded-3">
                                    <video controls="" crossorigin="anonymous" playsinline="" poster="assets/images/courses/4by3/<?= $course['course_image'] ?>" style="<?= $width_video ?>">
                                        <source src="assets/images/videos//<?= $course['video_path_file'] ?>" type="video/mp4" size="360" style="<?= $width_video ?>">
                                        <source src="assets/images/videos/720p.mp4" type="video/mp4" size="720">
                                        <source src="assets/images/videos/1080p.mp4" type="video/mp4" size="1080">
                                        <!-- Caption files -->
                                        <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt.txt" default="">
                                        <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt.txt">
                                        </track>
                                        </track>
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
                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li>
                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal text-success me-2"></i>All Lessons</li>
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
                                            <div class="mt-3 d-grid">
                                                <a href="#" class="btn btn-outline-primary">Add to cart</a>
                                                <a href="#" class="btn btn-success">Buy now</a>
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
                                                        <!-- <img src="assets/images/courses/4by3/<?= $lessons[$j]['lessons_image'] ?>" class="card-img-top" alt="course image"> -->
                                                        <div class="video-player rounded-3">
                                                            <video controls="" crossorigin="anonymous" playsinline="" poster="assets/images/courses/4by3/<?= $lessons[$j]['lessons_image'] ?>">
                                                                <source src="assets/images/videos/<?= $videos[$j]['file_path'] ?>" type="video/mp4" size="360">
                                                                <source src="assets/images/videos/<?= $videos[$j]['file_path'] ?>" type="video/mp4" size="720">
                                                                <source src="assets/images/videos/<?= $videos[$j]['file_path'] ?>" type="video/mp4" size="1080">
                                                                <!-- Caption files -->
                                                                <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt.txt" default="">
                                                                <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt.txt">
                                                                </track>
                                                                </track>
                                                            </video>
                                                        </div>
                                                        <div class="card-body pb-0 d-flex align-items-center justify-content-center flex-column">
                                                            <h5 class="card-title fw-normal text-center"><a href="#"><?= $videos[$j]['video_name'] ?></a></h5>
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
            </section>

    </main>
<?php } ?>


</body>