<?php

require 'layouts/trainer/navbar.php';
?>

<!-- Profile START -->
<div class="dropdown ms-1 ms-lg-0">
	<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
		<!-- Profile info -->
		<li class="px-3">
			<div class="d-flex align-items-center">
				<!-- Avatar -->
				<div class="avatar me-3">
					<img id="profile" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?>" alt="">
				</div>
				<div>
					<a id="username" class="h6" href="#"><?php echo $username; ?></a>
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

<!-- Logo Nav END -->
</header>

<!-- =======================
Page content START -->


<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- =======================
Page Banner START -->
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
									<img id="profile" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?>" alt="">
								</div>
							</div>
							<!-- Profile info -->
							<div class="col d-md-flex justify-content-between align-items-center mt-4">
								<?php
								if (isset($_SESSION['user'])) {
									$user_id = $_SESSION['user']['user_id'];
								}
								?> <div>
									<h1 id="username" class="my-1 fs-4"><?php echo $username; ?> <i class="bi bi-patch-check-fill text-info small"></i></h1>
									<ul class="list-inline mb-0">

										<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i><?php echo (total_course($user_id)); ?> Courses</li>

									</ul>
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
					<!-- Advanced filter responsive toggler END -->
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
Page Banner END -->

	<!-- =======================
Page content START -->
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
										<a class="list-group-item active" href="/trainer_dashboard"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
										<a class="list-group-item" href="/trainer_manage_category"><i class="bi bi-basket fa-fw me-2"></i>My Category</a>
										<a class="list-group-item" href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
										<a class="list-group-item" href="/trainer_manage_lesson"><i class="bi bi-basket fa-fw me-2"></i>My Lessons</a>
										<a class="list-group-item" href="/trainer_manage_video"><i class="bi bi-basket fa-fw me-2"></i>My Videos</a>
										<a class="list-group-item" href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
										<a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
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

					<!-- Counter boxes START -->
					<div class="row g-2">
						<!-- Counter item -->
						<div class="col-sm-6 col-lg-4">
							<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
								<span class="display-6 text-purple mb-0"><i class="fa-solid fa-folder fa-fw"></i></span>
								<div class="ms-4">
									<div class="d-flex">
										<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo (count_category($user_id)); ?>" data-purecounter-delay="200"></h5>
									</div>
									<span class="mb-0 h6 fw-light">Total Category</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
								<span class="display-6 text-warning mb-0"><i class="fa-regular fa-file fa-fw"></i></span>
								<div class="ms-4">
									<div class="d-flex">
										<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo (total_course($user_id)); ?>" data-purecounter-delay="200"><?php echo (total_course($user_id)); ?></h5>
									</div>
									<span class="mb-0 h6 fw-light">Total Courses</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
								<span class="display-6 text-info mb-0"><i class="fas fa-gem fa-fw"></i></span>
								<div class="ms-4">
									<div class="d-flex">
										<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo (total_customer($user_id)) ?>" data-purecounter-delay="300">0</h5>
										<span class="mb-0 h5"></span>
									</div>
									<span class="mb-0 h6 fw-light">Student bought</span>
								</div>
							</div>
						</div>
						<!-- Counter item -->
					</div>
					<!-- Counter boxes END -->

					<!-- Chart START -->
					<div class="row mt-3" style="margin-left: 30px;">


						<div class="col-sm-6 col-md-6 ">
							<span class="badge bg-dark text-white">Total This month</span>
							<h4 class="text-primary my-2"><?php echo (total_Revenue($user_id)) ?>$</h4>
							<p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last month</p>
						</div>


					</div>
					<div class="row">
						<div class="col-12">
							<div class="card border rounded-3 mt-5">
								<!-- Card header START -->
								<div class="card-header border-bottom">
									<div class="d-sm-flex justify-content-sm-between align-items-center">
										<h3 class="mb-2 mb-sm-0">Most Selling Courses</h3>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">View all</a>
									</div>
								</div>
								<!-- Card header END -->

								<!-- Card body START -->
								<div class="card-body">
									<div class="table-responsive-lg border-0 rounded-3">
										<!-- Table START -->
										<table class="table table-dark-gray align-middle p-4 mb-0">
											<!-- Table head -->
											<thead>
												<tr>
													<th scope="col" class="border-0 rounded-start">Course Name</th>
													<th scope="col" class="border-0">Selling</th>
													<th scope="col" class="border-0">Amount</th>

												</tr>
											</thead>
											<!-- Table body START -->
											<tbody>

												<!-- Table item -->
												<?php
												$most_selling = most_selling($user_id);
												foreach ($most_selling as $course) :

												?>
													<tr>

														<!-- Course item -->
														<td>
															<div class="d-flex align-items-center">
																<!-- Image -->
																<div class="w-100px w-md-60px">
																	<img src="assets/images/courses/4by3/<?= $course['course_image'] ?>" class="rounded" alt="">
																</div>
																<!-- Title -->
																<h6 class="mb-0 ms-2">
																	<a href="#"><?= $course['course_name'] ?></a>
																</h6>
															</div>
														</td>
														<!-- Selling item -->
														<td><?= $course['course_count'] ?></td>
														<!-- Amount item -->
														<td>$<?= $course['total_price'] ?></td>
														<!-- Period item -->

													</tr>
												<?php endforeach; ?>



											</tbody>
											<!-- Table body END -->
										</table>
										<!-- Table END -->
									</div>

									<!-- Pagination -->
									<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-3">
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
								</div>
								<!-- Card body START -->
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</section>
	<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

</html>