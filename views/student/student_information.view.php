<?php
require 'models/information_payment.php';
require('layouts/student/navbar.php')
?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
<!-- Profile START -->
<div class="dropdown ms-1 ms-lg-0">
	<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
		<!-- Profile info -->

		<!-- Links -->
		<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
		<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
		<li>
			<hr class="dropdown-divider">
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
	<section class="pt-0 " style="margin-bottom: 0px;">
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

	<section class="pt-0 mb-0" style="margin-top: 0px;">
		<div class="container">
			<div class="row d-flex justify-content-center" style="margin-top: 0;">

				<!-- Right sidebar START -->
				<div class="col-xl-3 mt-5">
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
						</div>
					</nav>
					<!-- Responsive offcanvas body END -->
				</div>
				<div class="col-xl-9">
					<div class="card-header border-bottom">
						<h3 class="mb-0">My Payment List</h3>
					</div>
					<div class="table-responsive p-1 ">
						<div class="container w-50 pt-5"></div>
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr class="text-black">
									<th scope="col">Courses Name</th>
									<th scope="col">Price</th>
									<th scope="col">Date</th>
								</tr>
							</thead>

							<tbody>
								<?php
								$information_payment = information_student_patment($user_id);
								foreach ($information_payment as $information) :
								?>
									<tr>
										<td class="">
											<?php echo $information['course_name'] ?>
										</td>
										<td>

											<?php echo $information['course_price'] ?>
										</td>

										<td>
											<?php echo $information['date'] ?>
										</td>

									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</section>


</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->

<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/functions.js"></script>

<script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

</body>

</html>