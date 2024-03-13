<body>
    <?php

    // require 'layouts/trainer/navbar.php';
    require 'layouts/navbar.php';
    ?>
    <main>
        <?php $courses =  get_course($course_id);


        ?>
        <!-- Page content START -->
        <section class="pt-3 pt-xl- 3">
            <div class="p-5 d-flex " data-sticky-container="">
                <div class="row g-4 ">
                    <!-- Main content START -->
                    <div class="col-xl-8 bg bg-white rounded border" style="width: 90%; margin-top: 30px;">

                        <div class="row g-4">

                            <div class="col-12">
                                <!-- Title -->
                                <h2 class="p-2"><?= $courses['course_name'] ?></h2>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate me-2"></i>12k Enrolled</li>
                                    <li class="list-inline-item fw-light h6"><i class="fas fa-globe me-2"></i>English
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 position-relative">
                                <div class="video-player rounded-3">
                                    <video controls="" crossorigin="anonymous" playsinline="" poster="assets/images/courses/4by3/<?= $courses['course_image'] ?>" style="width: 700px; height : 50vh">
                                        <source src="assets/images/videos/<?= $courses['video_path_file'] ?>" type="video/mp4" size="360">
                                        <source src="assets/images/videos/<?= $courses['video_path_file'] ?>" type="video/mp4" size="720">
                                        <source src="assets/images/videos/<?= $courses['video_path_file'] ?>" size="1080">
                                        <!-- Caption files -->
                                        <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt.txt" default="">
                                        <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt.txt">
                                        </track>
                                        </track>
                                    </video>
                                </div>
                            </div>

                            <!-- About course START -->
                            <div class="col-12">
                                <div class="card border">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom">
                                        <h3 class="mb-0">Course description</h3>
                                    </div>

                                    <div class="card-body">
                                        <p class="mb-3"><?= $courses['description'] ?></p>
                                    </div>
                                    <h5 class="mt-4">What you’ll learn</h5>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Digital
                                                    marketing course introduction</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Customer
                                                    Life cycle</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>What is
                                                    Search engine optimization(SEO)</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Facebook
                                                    ADS</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Facebook
                                                    Messenger Chatbot</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Search
                                                    engine optimization tools</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Why SEO
                                                </li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>URL
                                                    Structure</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Featured
                                                    Snippet</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>SEO tips
                                                    and tricks</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Google tag
                                                    manager</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">As it so contrasted oh estimating instrument. Size like body
                                        some one had. Are conduct viewing boy minutes warrant the expense? Tolerably
                                        behavior may admit daughters offending her ask own. Praise effect wishes
                                        change way and any wanted. Lively use looked latter regard had. Do he it
                                        part more last in. </p>
                                </div>
                                <!-- Card body START -->
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card border rounded-3">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h3 class="mb-0">The lessons that have in this course </h3>
                                </div>
                                <div class="card-body">


                                    <div class="row g-5">
                                        <?php
                                        $lessons = get_name_lessons($course_id);
                                        foreach ($lessons as $lesson) :

                                        ?>
                                            <div class="col-12">
                                                <!-- Curriculum item -->
                                                <h5 class="mb-4"><?= $lesson['title'] ?></h5>
                                                <?php
                                                $videos = video_free($lesson['lesson_id']);
                                                foreach ($videos as $video) :

                                                ?>
                                                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                        <div class="d-flex">
                                                            <a href="" class="btn btn-danger-soft btn-round mb-0" onclick="return confirm('Please payment!!')"><i class="fas fa-play"></i></a>
                                                            <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                                <h6 class="mb-0"><?= $video['video_name'] ?></h6>
                                                                <p class="mb-2 mb-sm-0 small">10m 56s</p>
                                                            </div>
                                                        </div>
                                                        <!-- Button -->
                                                        <a href="controllers/cart/cart.add.controller.php?id=<?= $courses['course_id'] ?>" class="btn btn-sm btn-success mb-0"><?= $video['video_type'] ?></a>
                                                    </div>

                                                    <!-- Divider -->
                                                    <hr>
                                                <?php endforeach; ?>


                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- Card body START -->
                            </div>
                        </div>
                        <!-- Curriculum END -->

                        <!-- FAQs START -->

                        <!-- FAQs END -->
                    </div>
                </div>
                <!-- Main content END -->
                <div class="col-xl-4 pt-2">
                    <div data-sticky="" data-margin-top="80" data-sticky-for="768">
                        <div class="row g-4">
                            <div class="col-md-6 col-xl-12">
                                <!-- Course info START -->
                                <div class="card card-body border p-4">
                                    <!-- Price and share button -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Price -->
                                        <h3 class="fw-bold mb-0 me-2">$ <?= $courses['course_price'] ?></h3>
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
                                        <a href="controllers/cart/cart.add.controller.php?id=<?= $courses['course_id'] ?>" class="btn btn-outline-primary">Add to cart</a>
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
                                            <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-clock text-primary"></i>Duration</span>
                                            <span><?= $courses['course_duration'] ?>h</span>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Language</span>
                                            <span>English</span>
                                        </li>

                                    </ul>
                                    <hr>

                                    <div class="d-sm-flex align-items-center">
                                        <!-- Avatar image -->
                                        <?php
                                        $trainer = get_name_trainer($courses['course_id']);
                                        // var_dump($trainer);
                                        ?>
                                        <div class="avatar avatar-xl">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/<?= $trainer['image'] ?> " alt="avatar">
                                        </div>
                                        <div class="ms-sm-3 mt-2 mt-sm-0">
                                            <h5 class="mb-0"><a href="#"><?= $trainer['username'] ?></a></h5>
                                            <p class="mb-0 small"><?= $trainer['email'] ?></p>
                                        </div>
                                    </div>

                                    <!-- Rating and follow -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-0 mt-sm-2">

                                    </div>
                                </div>
                                <!-- Course info END -->
                            </div>



                        </div>
                    </div>
                </div>

                <!-- Right sidebar START -->

            </div>


        </section>


    </main>


</body>