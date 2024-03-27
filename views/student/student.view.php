<?php require('layouts/student/navbar.php') ?>

<!-- Profile START -->


<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- =======================
Page Banner START -->
	<section class="pt-0">
		<div class="container-fluid px-0">
			<div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
			</div>
		</div>
		<div class="container mt-n4">
			<div class="row">
				<div class="col-12">
					<div class="card bg-transparent card-body pb-0 ps-0 mt-2 mt-sm-0">
						<div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
							<!-- Avatar -->
							<div class="col-auto">
								<div class="avatar avatar-xxl position-relative mt-n3">
									<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/<?php echo $profileImage; ?>" alt="">
									<span class="badge bg-success text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
								</div>
							</div>
							<!-- Profile info -->
							<div class="col d-sm-flex justify-content-between align-items-center">
								<div>
									<h1 class="my-1 fs-4"><?php echo $username; ?> </h1>
								</div>
								<!-- Button -->
								<div class="mt-2 mt-sm-0">
									<a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my courses</a>
								</div>
							</div>
						</div>
					</div>

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
										<a class="list-group-item" href="/dashboard_student"><i class="bi bi-basket fa-fw me-2"></i>Dashboard</a>
										<a class="list-group-item" href="/student_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
										<a class="list-group-item" href="/student"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment info</a>
									</div>
								</div>
							</div>
					</nav>
				</div>
				<div class="col-xl-9">

					<!-- Counter boxes START -->
					<div class="row mb-4">
						<!-- Counter item -->
						<div class="col-sm-6 col-lg-6 mb-3 mb-lg-0">
							<div class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
								<span class="display-6 lh-1 text-orange mb-0"><i class="fas fa-tv fa-fw"></i></span>
								<div class="ms-4">
									<div class="d-flex">
										<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo (student_course($user_id)) ?>" data-purecounter-delay="200">0</h5>
									</div>
									<p class="mb-0 h6 fw-light">Total Courses</p>

								</div>
							</div>
						</div>
						<!-- Counter item -->
						<div class="col-sm-6 col-lg-6 mb-3 mb-lg-0">
							<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
								<span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-clipboard-check fa-fw"></i></span>
								<div class="ms-4">
									<div class="d-flex">
										<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo (total_spending($user_id)) ?>" data-purecounter-delay="200">0</h5>
									</div>
									<p class="mb-0 h6 fw-light">Total Spending</p>
								</div>
							</div>
						</div>

					</div>
				</div><!-- Row END -->
			</div>
		</div>
	</section>
	<!-- =======================
Page content END -->

</main>


<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

</html>