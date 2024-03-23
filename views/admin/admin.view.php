<!-- Sale & Revenue Start -->

<?php
// require 'layouts/admin/navbar.php';
?>

<body>
    <div class="container-fluid pt-4 px-4 bg-black">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-6">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-chalkboard-user fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Trainers</p>
                        <h6 class="mb-0 text-center"><?php echo (count_trainer()) ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-graduation-cap fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Students</p>
                        <h6 class="mb-0 text-center"><?php echo (count_students()) ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="mb-0">Top teachers with many courses</h5>
                    </div>
                    <?php
                    $trainers = top_teacher();
                    foreach ($trainers as $trainer) :
                    ?>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="assets/images/avatar/<?= $trainer['image'] ?>" alt="" style="width: 50px; height: 50px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <h6 class="mb-2"><?= $trainer['username'] ?></h6>
                                    <h6 class="mb-0 text-center"><?= $trainer['course_count'] ?></h6>
                                    <button type="button" class="btn bg-danger text-white" data-bs-toggle="modal" data-bs-target="#view_detail_<?= $trainer['user_id'] ?>">Show Detail</button>

                                </div>
                            </div>
                        </div>

                        <!-- ============= view detail ============= -->
                        <div class="modal fade" id="view_detail_<?= $trainer['user_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title text-primary text-center" id="exampleModalLabel"><?= $trainer['username'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-secondary">
                                        <div class="row">
                                            <?php
                                            $courses = course_category($trainer['user_id']);
                                            foreach ($courses as $course) :
                                            ?>
                                                <div class="col-md-4">
                                                    <div class="card" style="width: 14rem;height:32vh">
                                                        <img src="assets/images/courses/4by3/<?= $course['course_image'] ?>" class="card-img-top" alt="..." height="150vh">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-danger text-center"><?= $course['course_name'] ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="mb-0">Calender</h5>
                        <a href="">Show All</a>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-0">Recent Sales</h5>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">

                            <th scope="col">Date</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sales_recents = select_sale_recent();
                        foreach ($sales_recents as $sales) :
                        ?>
                            <tr>
                                <td><?= $sales['date'] ?></td>
                                <td><?= $sales['username'] ?></td>
                                <td><?= $sales['course_price'] ?>$</td>
                                <td><a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#detail_customer_<?= $sales['course_id'] ?>">Detail</a></td>
                            </tr>

                            <!-- ============ detail information ============= -->
                            <div class="modal fade" id="detail_customer_<?= $sales['course_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-dark text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Customer Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-3">
                                                    <!-- Profile Image -->
                                                    <div class="d-flex justify-content-start pl-3">
                                                        <img src="assets/images/avatar/<?= $sales['image'] ?>" class="rounded-circle" alt="" width="180px">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- User Information -->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p><strong>Name:</strong> <span id="userName"><?= $sales['username'] ?></span></p>
                                                        <p><strong>Email:</strong> <span id="userEmail"><?= $sales['email'] ?></span></p>
                                                        <p><strong>Course name:</strong> <span id="userEmail"><?= $sales['course_name'] ?></span></p>
                                                        <p><strong>Price:</strong> <span id="userEmail"><?= $sales['course_price'] ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>