﻿<?php 
require 'layouts/trainer/navbar.php';
 ?>
<script src="../../vendor/js/searchcourseontrainer.js"></script>
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



	<!-- Header END -->

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
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal">
											Create Course
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
											<a class="list-group-item" href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
											<a class="list-group-item" href="/trainer_manage_earning"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
											<a class="list-group-item " href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
											<a class="list-group-item" href="/trainer_manage_orders"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>

											<a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
											<a class="list-group-item" href="/trainer_manage_payout"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>

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
						<!-- Card START -->
						<div class="card border rounded-3">
							<!-- Card header START -->
							<div class="card-header border-bottom">
								<h3 class="mb-0">My Courses List</h3>
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
												<th scope="col" class="border-0 rounded-start">Course Title</th>
												<th scope="col" class="border-0">Course Sold</th>
												<th scope="col" class="border-0">Price</th>
												<th scope="col" class="border-0 rounded-end">Action</th>
											</tr>
										</thead>

										<!-- Table body START -->
										<tbody>
											<!-- Table item -->
											<!-- ============loop for create list course======= -->
											<?php
											$courses = get_courses();
											foreach ($courses as $course) :
											?>
												<tr>
													<!-- Course item -->
													<td>
														<div class="d-flex align-items-center">
															<!-- Image -->
															<div class="w-100px">
																<img src="assets/images/courses/4by3/<?php echo $course['course_image'] ?>" class="rounded" alt="">
															</div>
															<div class="mb-0 ms-4">
																<!-- Title -->
																<h5><a href="#"><?php echo $course['course_name'] ?></a></h5>
																<!-- Info -->
																<div class="d-sm-flex">
																	<p class="h6 fw-light mb-0 small me-3"><i class="fas fa-table text-orange me-2"></i><?php echo $course['lesson_count'] ?>
																		lessons</p>
																</div>
															</div>
														</div>
													</td>
													<!-- Enrolled item -->
													<td class="text-center text-sm-start"><?php echo $course['sold_lesson_count'] ?></td>
													<td><?php echo $course['course_price'] ?></td>
													<!-- Action item -->
													<td>
														<a href="/controllers/trainers/trainer_edit_course.controller.php?id=<?= $course['course_id'] ?>" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
														<!-- <a href="controllers/trainers/trainer_edit_course.controller.php?id=<?= $course['course_id'] ?>" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"  ><i class="far fa-fw fa-edit"></i></a> -->
														<a href="<?php $course['course_id'] ?>" class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></a>
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
	<!-- **************** MAIN CONTENT END **************** -->
	<!-- <div class="container"> -->

	<!-- //=========form for create course============= -->
	<!-- Modal -->

	<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">

			<div class="modal-content bg-secondary">
				<div class="modal-header ">
					<h5 class="modal-title" id="exampleModalLabel">Create Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="controllers/trainers/trainer_create_course.controller.php" method="POST" enctype="multipart/form-data" class="w-100 row g-2">
						<div class="form-group mt-3 ">
							<input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course name" required>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<input type="number" class="form-control" id="course_duration" name="course_duration" placeholder="Enter course duration" required>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<div class="input-group">
								<span class="input-group-text">$</span>
								<input type="text" class="form-control" id="course_price" name="course_price" placeholder="Enter course price" required>
							</div>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<input class="form-control" id="course_image" type="file" name="course_image" required>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<select class="form-select" id="teacher" name="teacher" required>
								<option selected disabled>Select teacher</option>
								<?php
								$trainers = get_trainers();
								foreach ($trainers as $trainer) :
								?>
									<option value="<?php echo $trainer['user_id'] ?>"><?php echo $trainer['username'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group mt-3 col-sm-12">
							<select class="form-select" id="course_category" name="course_category" required>
								<option selected disabled>Select category</option>
								<?php
								$categories = get_categories();
								foreach ($categories as $category) :
								?>
									<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group mt-3 col-12">
							<textarea class="form-control" id="description" rows="3" name="description" required></textarea>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Create</button>
							<button class="btn btn-secondary" id="modal" data-bs-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- =============form for edit course -->

	<div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content bg-secondary">
				<div class="modal-header ">
					<h5 class="modal-title" id="exampleModalLabel">Edit Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="controllers/trainers/trainer_edit_course.controller.php" method="POST" enctype="multipart/form-data" class="w-100 row g-2">
						<div class="form-group mt-3 ">
							<!-- <label for="course_name" class="form-label">Course Name</label> -->
							<input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course name" required>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<!-- <label for="course_duration" class="form-label">Course Duration</label> -->
							<input type="number" class="form-control" id="course_duration" name="course_duration" placeholder="Enter course duration" required>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<!-- <label for="course_price" class="form-label">Course Price</label> -->
							<div class="input-group">
								<span class="input-group-text">$</span>
								<input type="text" class="form-control" id="course_price" name="course_price" placeholder="Enter course price" required>
							</div>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<!-- <label for="course_image" class="form-label">Course Image</label> -->
							<input class="form-control" id="course_image" type="file" name="course_image" required>
						</div>
						<div class="form-group mt-3 col-sm-6">
							<!-- <label for="teacher" class="form-label">Teacher</label> -->
							<select class="form-select" id="teacher" name="teacher" required>
								<option selected disabled>Select teacher</option>
								<?php
								$trainers = get_trainers();
								foreach ($trainers as $trainer) :
								?>
									<option value="<?php echo $trainer['user_id'] ?>"><?php echo $trainer['username'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group mt-3 col-sm-12">
							<!-- <label for="course_category" class="form-label">Course Category</label> -->
							<select class="form-select" id="course_category" name="course_category" required>
								<option selected disabled>Select category</option>
								<?php
								$categories = get_categories();
								foreach ($categories as $category) :
								?>
									<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group mt-3 col-12">
							<!-- <label for="description" class="form-label">Course Description</label> -->
							<textarea class="form-control" id="description" rows="3" name="description" required></textarea>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-success">Update</button>
							<button class="btn btn-secondary" id="modal" data-bs-dismiss="modal">Cancel</button>
						</div>
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