﻿<script src="../../vendor/js/searchcourseontrainer.js" defer></script>
<?php
require 'layouts/trainer/navbar.php';
?>

<body class="pt-0">

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<section class="pt-0">
			<div class="container-fluid px-0">
				<div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
				</div>
			</div>
			<div class="container mt-n4">
				<div class="row">

					<div class="col-12">
						<div class="card bg-transparent card-body p-0">
							<div class="row d-flex justify-content-between">

								<div class="col-auto mt-4 mt-md-0">
									<div class="avatar avatar-xxl mt-n3">
										<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?>" alt="">
									</div>
								</div>

								<div class="col d-md-flex justify-content-between align-items-center mt-4">
									<div>
										<h1 class="my-1 fs-4"><?php echo $username; ?> <i class="bi bi-patch-check-fill text-info small"></i></h1>
										<ul class="list-inline mb-0">
											<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i><?php echo count_course($user_id) ?> Courses</li>

										</ul>
									</div>

									<div class="d-flex align-items-center mt-2 mt-md-0">
										<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-modal">
											Create Course
										</button>

									</div>
								</div>
							</div>
						</div>

						<hr class="d-xl-none">
						<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
							<a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
							<button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
								<i class="fas fa-sliders-h"></i>
							</button>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="pt-0">
			<div class="container">
				<div class="row">

					<div class="col-xl-3">

						<nav class="navbar navbar-light navbar-expand-xl mx-0">
							<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

								<div class="offcanvas-header bg-light">
									<h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>

								<div class="offcanvas-body p-3 p-xl-0">
									<div class="bg-dark border rounded-3 pb-0 p-3 w-100">
										<div class="list-group list-group-dark list-group-borderless">
											<a class="list-group-item" href="/trainer_dashboard"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
											<a class="list-group-item" href="/trainer_manage_category"><i class="bi bi-basket fa-fw me-2"></i>My Category</a>
											<a class="list-group-item active" href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
											<a class="list-group-item" href="/trainer_manage_lesson"><i class="bi bi-basket fa-fw me-2"></i>My Lessons</a>
											<a class="list-group-item" href="/trainer_manage_video"><i class="bi bi-basket fa-fw me-2"></i>My Video</a>
											<a class="list-group-item" href="/trainer_manage_earning"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
											<a class="list-group-item " href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
											<a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
											<a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
											<a class="list-group-item text-danger bg-danger-soft-hover" href="/signin"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign
												Out</a>
										</div>
									</div>
								</div>
							</div>
						</nav>

					</div>

					<div class="col-xl-9">

						<div class="card border rounded-3">
							<div class="card-header border-bottom">
								<h3 class="mb-0">My Courses List</h3>
							</div>

							<div class="card-body">


								<div class="row g-3 align-items-center justify-content-between mb-4">

									<div class="col-md-8">
										<form class="rounded position-relative">
											<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search" id="searches">
											<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
										</form>
									</div>

									<div id="course" class="col-md-3">

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

								<div class="table-responsive-lg border-0">
									<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

										<thead>
											<tr>
												<th scope="col" class="border-0 rounded-center">Course Title</th>
												<th scope="col" class="border-0 rounded-center">Category</th>
												<th scope="col" class="border-0">Price</th>
												<th scope="col" class="border-0 rounded-center text-center">Action</th>
											</tr>
										</thead>


										<tbody>

											<?php
											$courses = get_courses($user_id);
											foreach ($courses as $course) :

											?>

												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="w-60px">
																<form action="/student_view_course" method="post">
																	<input type="hidden" value="<?= $course['course_id'] ?>" name="course_id">
																	<h6 class="card-title">
																		<button type="submit" class="border-0 text-success">
																			<img src="../../assets/images/courses/4by3/<?= $course['course_image'] ?>" alt="" class="rounded" style="width: 100px; height: 50px;">
																		</button>
																	</h6>
																</form>



															</div>
															<div class="mb-0 ms-2">
																<h6><a href=""><?php echo $course['course_name'] ?></a></h6>
																<div class="d-sm-flex">
																	<p class="h6 fw-light mb-0 small me-3">
																		<i class="fa fa-table text-orange me-2"></i><?php echo count_nb_lesson($course['course_id']); ?> lessons
																	</p>
																</div>
															</div>
														</div>
													</td>
													<td><?php echo $course['category_name'] ?>$</td>
													<td><?php echo $course['course_price'] ?>$</td>
													<td class="d-flex text-center text-sm-center p-5 align-items-center justify-content-center">
														<form action="/trainer_edit_course" method="post">
															<input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
															<button type="submit" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></button>
														</form>
														<form action="/trainer_delete_course" method="post" onsubmit="return confirmDelete();">
															<input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
															<button class="btn btn-sm btn-danger-soft btn-round mb-0">
																<i class="fas fa-fw fa-times"></i>
															</button>
														</form>

														<form action="/student_view_course" method="post">
															<input type="hidden" value="<?= $course['course_id'] ?>" name="course_id">
															<button type='submit' class="btn btn-sm btn-success-soft btn-round mb-0 view-category"><i class="fa-regular fa-eye"></i></button>
														</form>
														<script>
															function confirmDelete() {
																return confirm("Are you sure you want to delete this course?");
															}
														</script>
													</td>
												</tr>
											<?php endforeach; ?>


										</tbody>

									</table>
								</div>



								<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">

									<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>

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

							</div>

						</div>

					</div>

				</div>
			</div>
		</section>


	</main>

	<?php
	if (isset($_SESSION['user'])) {
		$user_id = $_SESSION['user']['user_id'];
	}
	?>
	<!-- //=========form for create course============= -->

	<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">

			<div class="modal-content bg-secondary">
				<div class="modal-header ">
					<h5 class="modal-title" id="exampleModalLabel">Create Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<form action="controllers/trainers/trainer_create_course.controller.php" method="POST" enctype="multipart/form-data" class="w-100">
						<div class="form-group mt-1">
							<label for="course_duration">Course name</label>
							<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
							<input type="text" class="form-control bg-white" name="course_name" placeholder="course_name" value="" required>
						</div>
						<div class="form-group mt-1 d-flex justify-content-between">
							<div class="form-group mt-1">
								<label for="course_duration">Course duration</label>
								<input type="number" class="form-control bg-white" name="course_duration" placeholder="Course duration" value="" required>
							</div>
							<div class="form-group mt-1">
								<label for="course_duration">Course price</label>
								<input type="text" class="form-control decimal-input" name="course_price" placeholder="Course Price" aria-label="Decimal Input" value="" required>
							</div>
						</div>
						<div class="form-group mt-1 ">
							<div class="form-group mt-1">
								<label for="course_duration">Course image</label>
								<input class="form-control form-control-sm" id="formFileSm" type="file" name="course_image" placeholder="Course Image" required>
							</div>
							<div class="form-group mt-1">
								<label for="course_duration">Course video</label>
								<input class="form-control form-control-sm" id="formFileSm" type="file" name="course_video" placeholder="Insert the link of video" required>
							</div>
						</div>


						<label for="course_duration">Course category</label>
						<select class="form-select mt-3" aria-label="Default select example" name="course_category" required>
							<option selected>Select categories</option>
							<?php
							$categories = get_categories();
							foreach ($categories as $category) :
							?>
								<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
							<?php endforeach; ?>
						</select>
						<label for="course_duration">Course description</label>
						<textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" name="description" required>Course description</textarea>
						<button type="submit" class="btn btn-primary m-4">Create</button>
						<button class="btn btn-danger m-4" id="modal" data-bs-dismiss="modal">cancel</button>
					</form>
				</div>
			</div>
		</div>
	</div>


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