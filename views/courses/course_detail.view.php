<body>
    <?php

    // require 'layouts/trainer/navbar.php';
    require 'layouts/navbar.php';
    ?>
    <main>
        <?php $course =  get_course($course_id);
        ?>
        <!-- Page content START -->
        <section class="py-0 pb-lg-3">
            <div class="container">
                <div class="row g-3">
                    <!-- Course video START -->
                    <div class="col-12">
                        <div class="video-player rounded-3">
                            <video controls="" crossorigin="anonymous" playsinline="" poster="assets/images/courses/4by3/<?= $course['course_image'] ?>">
                                <source src="assets/images/videos//<?= $course['video_path_file'] ?>" type="video/mp4" size="360">
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
                    <!-- Course video END -->

                    <!-- Playlist responsive toggler START -->
                    <div class="col-12">
                        <button class="btn btn-primary d-lg-none mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="bi bi-camera-video me-1"></i> Playlist
                        </button>
                    </div>
                    <div class="col-12">
                        <!-- Title -->
                        <h1><?= $course['course_name'] ?></h1>
                        <!-- Content -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal text-success me-2"></i>All Lessons</li>
                        </ul>
                    </div>
                    <!-- Playlist responsive toggler END -->
                </div>
            </div>
        </section>
        <section class="pt-lg-2">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-lg-8 ">
                        <h4 class="">The lessons in this course</h4>
                        <p class="mb-0">Choose from hundreds of courses from specialist organizations</p>
                    </div>
                </div>

                <!-- Tabs START -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
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
                            <div class="row g-4">
                                <?php
                                $videos = get_all_videos($lessons[$i]['lesson_id']);
                                if (count($videos) != 0) :
                                    for ($j = 0; $j < count($videos); $j++) :
                                ?>
                                        <div class="col-sm-6 col-lg-4 col-xl-3">
                                            <div class="card shadow h-100">
                                                <!-- <img src="assets/images/courses/4by3/<?= $lessons[$j]['lessons_image'] ?>" class="card-img-top" alt="course image"> -->
                                                <div class="video-player rounded-3">
                                                    <video controls="" crossorigin="anonymous" playsinline="" poster="assets/images/courses/4by3/<?= $lessons[$j]['lessons_image'] ?>">
                                                        <source src="assets/images/videos/<?=$videos[$j]['file_path'] ?>" type="video/mp4" size="360">
                                                        <source src="assets/images/videos/720p.mp4" type="video/mp4" size="720">
                                                        <source src="assets/images/videos/1080p.mp4" type="video/mp4" size="1080">
                                                        <!-- Caption files -->
                                                        <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt.txt" default="">
                                                        <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt.txt">
                                                        </track>
                                                        </track>
                                                    </video>
                                                </div>
                                                <div class="card-body pb-0 d-flex align-items-center justify-content-center flex-column">
                                                    <h5 class="card-title fw-normal text-center"><a href="#"><?= $videos[$j]['video_name'] ?></a></h5>
                                                    <!-- <button class="btn btn-success">Watch this video</button> -->
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


                <!-- Tabs content END -->
            </div>
        </section>



    </main>


</body>