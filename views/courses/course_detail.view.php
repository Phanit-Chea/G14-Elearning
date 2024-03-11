<?php
require 'layouts/navbar.php';
?>

<body>
    <main>

        <!-- Page content START -->
        <section class="pt-3 pt-xl-3">
            <div class="p-5" data-sticky-container="">
                <div class="row g-4">
                    <!-- Main content START -->
                    <div class="col-xl-8 bg bg-white rounded border" style="margin-top: 120px">

                        <div class="row g-4">
                            <!-- Title START -->
                            <?php
                            $id  = $_GET['id'];
                            $course = get_course($id);
                            ?>
                            <div class="col-12">
                                <!-- Title -->
                                <h2 class="p-2"><?= $course['course_name'] ?></h2>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate me-2"></i>12k Enrolled</li>
                                    <li class="list-inline-item fw-light h6"><i class="fas fa-globe me-2"></i>English
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 position-relative">
                                <div class="video-player rounded-3">
                                    <video controls="" crossorigin="anonymous" playsinline="" poster="assets/images/courses/4by3/<?= $course['course_image'] ?>">
                                        <source src="assets/images/videos/360p.mp4" type="video/mp4" size="360">
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

                            <!-- About course START -->
                            <div class="col-12">
                                <div class="card border">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom">
                                        <h3 class="mb-0">Course description</h3>
                                    </div>

                                    <div class="card-body">
                                        <p class="mb-3"><?= $course['description'] ?></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 pt-7">
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

<!-- =============================================== -->
                                        <!-- Buttons -->
                                        <div class="mt-3 d-grid">
                                            <a href="controllers/cart/cart.add.controller.php?id=<?= $course['course_id'] ?>" class="btn btn-outline-primary"  >Add to cart</a>
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
                                                <span><?= $course['course_duration'] ?>h</span>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Language</span>
                                                <span>English</span>
                                            </li>

                                        </ul>
                                        <hr>
                                        <?php
                                               $trainer = get_name_trainer($_GET['id']);

                                        ?>
                                        <div class="d-sm-flex align-items-center">
											<!-- Avatar image -->
											<div class="avatar avatar-xl">
												<img class="avatar-img rounded-circle" src="<?=$trainer['image']?> "
													alt="avatar">
											</div>
											<div class="ms-sm-3 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#"><?php echo($trainer['username'])?></a></h5>
												<p class="mb-0 small"><?=$trainer['email']?></p>
											</div>
										</div>

                                        <!-- Rating and follow -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mt-0 mt-sm-2">
                                            <!-- Rating star -->
                                            <!-- <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                            </ul> -->

                                            <!-- button -->
                                            <!-- <button class="btn btn-sm btn-primary mb-0 mt-2 mt-sm-0">Follow</button> -->
                                        </div>
                                    </div>
                                    <!-- Course info END -->
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>


    </main>


</body>