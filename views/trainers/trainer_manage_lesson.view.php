﻿<script src="../../vendor/js/searchcourseontrainer.js" defer></script>
<?php
require 'layouts/trainer/navbar.php';
?>

<body class="pt-0">

	<!-- **************** MAIN CONTENT START **************** -->
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
										<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?>" alt="">
									</div>
								</div>
								<!-- Profile info -->
								<div class="col d-md-flex justify-content-between align-items-center mt-4">
									<div>
										<h1 class="my-1 fs-4"><?php echo $username; ?> <i class="bi bi-patch-check-fill text-info small"></i></h1>
										<ul class="list-inline mb-0">
											<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
											<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled
												Students</li>
											<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>25 Courses</li>
										</ul>
									</div>
									<!-- Button -->
									<div class="d-flex align-items-center mt-2 mt-md-0">
										<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_modal">
											Create Lesson
										</button>

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
											<a class="list-group-item " href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
											<a class="list-group-item " href="/trainer_manage_lesson"><i class="bi bi-basket fa-fw me-2"></i>My Lessons</a>
											<a class="list-group-item active" href="/trainer_manage_video"><i class="bi bi-basket fa-fw me-2"></i>My Video</a>
											<a class="list-group-item" href="/trainer_manage_earning"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
											<a class="list-group-item " href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
											<a class="list-group-item" href="/trainer_manage_orders"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>

											<a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
											<a class="list-group-item" href="/trainer_manage_payout"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>

											<a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
											<a class="list-group-item text-danger bg-danger-soft-hover" href="/signin"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign
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
								<h3 class="mb-0">My Lesson List</h3>
							</div>
							<!-- Card header END -->

							<!-- Card body START -->
							<div class="card-body">

								<!-- Search and select START -->
								<div class="row g-3 align-items-center justify-content-between mb-4">
									<!-- Search -->
									<div class="col-md-8">
										<form class="rounded position-relative">
											<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search" id="searches">
											<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
										</form>
									</div>

									<!-- Select option -->
									<div id="course" class="col-md-3">
										<!-- Short by filter -->
										<form>
											<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
												<option value="">Sort by</option>
												<option>Free</option>
												<option>Newest</option>
												<option>Most popular</option>
												<option>Most Viewed</option>
											</select>
										</form>
									</div>
								</div>
								<!-- Search and select END -->

								<!-- Course list table START -->
								<div class="table-responsive-lg border-0">
									<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
										<!-- Table head -->
										<thead>
											<tr>
												<th scope="col" class="border-0 rounded-start">Image</th>
												<th scope="col" class="border-0 text-center">Lesson Title</th>
												<th scope="col" class="border-0 text-center">Course</th>
												<th scope="col" class="border-0 text-center">Video free</th>
												<th scope="col" class="border-0 text-center">Video primium</th>
												<th scope="col" class="border-0 rounded-end text-center">Action</th>
											</tr>
										</thead>

										<!-- Table body START -->
										<tbody>
											<!-- Table item -->
											<!-- ============loop for create list course======= -->
											<?php
											
											$newname = '';

											if (isset($_FILES['image'])) {
												$course_image = $_FILES['image'];
												$imagename = $course_image['name'];
												$tmppath = $course_image['tmp_name'];
												$img_error = $course_image['error'];
												$ext = pathinfo($imagename, PATHINFO_EXTENSION);
												$newname = uniqid("", true) . "." . $ext;
												$direct = "../../assets/images/courses/4by3/" . $newname;
												if ($img_error == 0) {
													move_uploaded_file($tmppath, $direct);
												}
											}

											$courses = coures_lesson($user_id);
											foreach ($lessons as $lesson) :


											?>
												<tr>
													<!-- Course item -->
													<td>
														<div>
															<img src="../../assets/images/avatar/<?= $lesson['image']; ?>" alt="" class="w-70px h-70px rounded-circle">
														</div>
													</td>

													<td>
														<div class="d-flex juctify-content-start">

															<div class="mb-0 ms-4">
																<!-- Title -->
																<h6><a href="#"><?php echo $lesson['title'] ?></a></h6>
																<!-- Info -->

															</div>
														</div>
													</td>

													<!-- Enrolled item -->
													<td class="text-center text-sm-center"><?php echo $lesson['course_name'] ?></td>

													<td>
														<p class="h6 fw-light mb-0 small me-3 text-center"><?php $nb_vdo_free = nb_vdo_free($lesson['lesson_id']);
																											foreach ($nb_vdo_free as $video) {
																												print_r($video['COUNT(videos.video_name)']);
																											}
																											?>
														</p>
													</td>
													<td>
														<p class="h6 fw-light mb-0 small me-3 text-center"></i><?php $nb_vdo_not_free = nb_vdo_not_free($lesson['lesson_id']);
																												foreach ($nb_vdo_not_free as $video) {
																													print_r($video['COUNT(videos.video_name)']);
																												}
																												?>
														</p>
													</td>
													<!-- Action item -->
													<td class="d-flex text-center text-sm-center pb-5 pt-5">
														<form action="#" method="post">
															<input type="hidden" name="course_id" value="<?= $lesson ['course_id'] ?>">
															<button type="submit" class="btn btn-sm btn-success-soft btn-round me-1 mb-0" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="far fa-fw fa-edit"></i></button>
														</form>
														<form action="/trainer_delete_lesson" method="post" onsubmit="return confirmDelete();">
    														<input type="hidden" name="lesson_id" value="<?= $lesson['lesson_id'] ?>">
    														<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
														</form>

														<script>
															function confirmDelete() {
																return confirm("Are you sure you want to delete this lesson?");
															}
														</script>
													</td>

												</tr>
											<?php endforeach; ?>
										</tbody>
										<!-- Table body END -->
									</table>
								</div>
								<!-- Course list table END -->

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
	<?php
	if (isset($_SESSION['user'])) {
		$user_id = $_SESSION['user']['user_id'];
	}

	?>


	<div class="modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-sucess">
					<h5 class="modal-title text-primary" id="exampleModalLabel">New Lesson</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body bg-secondary">
					<form action="controllers/trainers/trainer_create_lesson.controller.php" method="post" enctype="multipart/form-data">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="name" name="lesson_title">
							<label for="name">Lesson Title</label>
						</div>

						<div class="form-floating mb-4">
							<select class="form-select" id="category" name="lesson_course" aria-label="Select Course">
								<option selected disabled>Select Course</option>
								<?php
								$courses = get_nb_course($user_id);
								foreach ($courses as $course) :
								?>
									<option value="<?= $course['course_id'] ?>"><?= $course['course_name'] ?></option>
								<?php endforeach; ?>
							</select>
							<label for="category">Course</label>
						</div>
						<div class="lesson_profile mb-4">
							<input type="file" class="bg-white h-50px w-100" name="lesson_image">
						</div>
						<div class="form-floating mb-4">
							<input type="text" class="form-control" id="description" name="lesson_description">
							<label for="description">Description</label>
						</div>
						<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add Lesson</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- =======================
Footer START -->

	<!-- =======================
Footer END -->

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Bootstrap JS -->
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="assets/vendor/choices/js/choices.min.js"></script>

	<!-- Template Functions -->
	<script src="assets/js/functions.js"></script>
	<script src="vendor/js/popup_form.js"></script>


</body>

</html>