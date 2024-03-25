<script src="../../vendor/js/searchcourses.js" defer></script>
<?php
require "models/admin.model.php";
if (isset($_SESSION['user'])) :
	$user_id = $_SESSION['user']['user_id'];

	$role = ($_SESSION['user']['role_id']);
	if ($role == 3) {
		require 'layouts/trainer/navbar_admin.php';
	}

endif;
?>
<!-- =======================
Main Banner START -->
<section class="bg-light">
	<div class="container pt-5 mt-0 mt-lg-5">

		<!-- Title and SVG START -->
		<div class="row position-relative mb-0 mb-sm-5 pb-0 pb-lg-5">
			<div class="col-lg-8 text-center mx-auto position-relative">
				<figure class="position-absolute top-0 start-0 ms-n9">
					<svg width="22px" height="22px" viewBox="0 0 22 22">
						<polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
						</polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-lg-block">
					<svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
						<polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 ">
						</polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-100 translate-middle d-none d-md-block">
					<svg width="27px" height="27px">
						<path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
						</path>
					</svg>
				</figure>

				<!-- Title -->
				<h1>Education, talents, and career opportunities. All in one place.</h1>
				<p>Get inspired and discover something new today. Grow your skill with the most reliable online courses
					and certifications in marketing, information technology, programming, and data science. </p>

				<!-- Search course -->
			</div>
		</div>
		<!-- Title and SVG END -->
	</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Video START -->
<section class="pb-0 py-sm-0 mt-n8">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center mx-auto">
				<div class="card card-body shadow p-2">
					<div class="position-relative">
						<!-- Image -->
						<img src="assets/images/courses/4by3/bg.jpg" class="card-img rounded-2" alt="...">
						<div class="card-img-overlay">
							<!-- Video link -->
							<div class="position-absolute top-50 start-50 translate-middle">
								<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
									<i class="fas fa-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Video END -->
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] != '') { ?>
	<!-- =======================
Category START -->


	<section>
		<div class="container">
			<div class="row g-4">
				<?php
				if (isset($_SESSION['user'])) :
					$user_id = $_SESSION['user']['user_id'];
					$role = ($_SESSION['user']['role_id']);

					// Fetch categories based on user role
					if ($role == 2 || $role == 3) {
						$categories = get_all_categories();
					} else if ($role == 1) {
						$categories = getData($user_id);
					}

					foreach ($categories as $num => $category) :
				?>
						<!-- Category item -->
						<div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body shadow rounded-3">
								<div class="d-flex align-items-center">
									<!-- Icon -->
									<div class="icon-lg bg-blue bg-opacity-10 rounded-circle text-blue"><i class="fas fa-photo-video"></i></div>
									<div class="ms-3">
										<!-- Category Name Link -->
										<h5 class="mb-0"><a href="#" class="stretched-link"><?= $category['category_name'] ?></a></h5>
										<span>38 Courses</span>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>


	<!-- =======================
Category END -->

	<!-- =======================
Featured course START -->
	<section class="pt-0 pt-md-5">
		<div class="container">
			<!-- Title -->
			<div class="row mb-4 ">
				<div class="col-lg-8 text-center mx-auto">
					<h2 class="fs-1 mb-0">Featured Courses</h2>
					<p class="mb-0">Explore top picks of the week </p>
				</div>
			</div>

			<div class="row g-4 ">
				<!-- Card Item START -->
				<?php

				if (isset($_SESSION['user'])) {
					$user_id = $_SESSION['user']['user_id'];

					$role = ($_SESSION['user']['role_id']);
					if ($role == 2 or $role == 3) {
						$courses = course_view_all();
					} else if ($role == 1) {
						$courses = course_view($user_id);
					};


					foreach ($courses as $course) :

				?>
						<div class="col-md-4 col-lg-4 col-xl-4 cards">
							<div class="card p-2 shadow h-100 ">
								<div class="rounded-top overflow-hidden">
									<div class="card-overlay-hover">
										<!-- Image -->
										<!-- <a href="">

											</a> -->
										<form action="/student_view_course" method="post">
											<input type="hidden" value="<?= $course['course_id'] ?>" name="course_id">
											<a href="/student_view_course" onclick="this.parentNode.submit(); return false;">
												<img style="width: 337px; height: 200px" src="assets/images/courses/4by3/<?= $course['course_image'] ?>" class="card-img-top" alt="course image">
											</a>
										</form>
									</div>
									<!-- Hover element -->
									<div class="card-img-overlay">
										<div class="card-element-hover d-flex justify-content-end">
											<form action="/student_view_course" method="post">
												<input type="hidden" value="<?= $course['course_id'] ?>" name="course_id">
												<button type="submit" class="border border-none ">
													<i class="fas fa-shopping-cart text-danger"></i>
												</button>
											</form>
										</div>
									</div>
								</div>
								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Badge and icon -->
									<div class="d-flex justify-content-between">
										<!-- Rating and info -->
										<ul class="list-inline hstack gap-2 mb-0">
											<!-- Info -->
											<li class="list-inline-item d-flex justify-content-center align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
												<span class="h6 fw-light mb-0 ms-2">4</span>

											</li>
											<!-- Rating -->
											<li class="list-inline-item d-flex justify-content-center align-items-center">
												<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
												<span class="h6 fw-light mb-0 ms-2">4.5</span>
											</li>
										</ul>
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/<?= $course['image'] ?>" alt="avatar">
										</div>
									</div>
									<!-- Divider -->
									<hr>
									<!-- Title -->
									<form action="/student_view_course" method="post">
										<input type="hidden" value="<?= $course['course_id'] ?>" name="course_id">
										<h6 class="card-title">
											<button type="submit" class="border-0 text-success">
												<h5>
													<?= $course['course_name'] ?>
												</h5>
											</button>
										</h6>
									</form>

									<!-- Badge and Price -->
									<div class="d-flex justify-content-between align-items-center mb-0">
										<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i>
												<?= $course['category_name'] ?>
											</a></div>
										<!-- Price -->
										<h5 class="text-success mb-0">$
											<?= $course['course_price'] ?>
										</h5>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>



			</div>

		</div>
	</section>
	<!-- =======================
Featured course END -->

	<!-- Action box START -->

	<section class="py-0">
		<div class="container">
			<div class="row g-4">
				<!-- Action box item -->
				<div class="col-lg-6 position-relative overflow-hidden">
					<div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
						<!-- Image -->
						<div class="position-absolute bottom-0 end-0 me-3">
							<img src="assets/images/element/08.svg" class="h-100px h-sm-200px" alt="">
						</div>
						<!-- Content -->
						<div class="row">
							<div class="col-sm-8 position-relative">
								<h3 class="mb-1">Earn a Certificate</h3>
								<p class="mb-3 h5 fw-light lead">Get the right professional certificate program for you.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Action box item -->
				<div class="col-lg-6 position-relative overflow-hidden">
					<div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
						<!-- Image -->
						<div class="position-absolute bottom-0 end-0 me-3">
							<img src="assets/images/element/15.svg" class="h-100px h-sm-200px" alt="">
						</div>
						<!-- Content -->
						<div class="row">
							<div class="col-sm-8 position-relative">
								<h3 class="mb-1">Best Rated Courses</h3>
								<p class="mb-3 h5 fw-light lead">Enroll now in the most popular and best rated courses.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light position-relative">

		<!-- SVG decoration -->
		<figure class="position-absolute top-50 start-0 translate-middle-y ms-5 d-none d-xxl-block">
			<svg width="29px" height="29px">
				<path class="fill-orange" d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
				</path>
			</svg>
		</figure>

		<!-- SVG decoration -->
		<figure class="position-absolute bottom-0 start-50 translate-middle-x">
			<svg width="23px" height="23px">
				<path class="fill-primary" d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
				</path>
			</svg>
		</figure>

		<!-- SVG decoration -->
		<figure class="position-absolute top-50 end-0 translate-middle-y ms-5">
			<svg width="22px" height="22px">
				<path class="fill-warning" d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
				</path>
			</svg>
		</figure>

		<div class="container">
			<!-- Live course START -->
			<div class="row g-4 align-items-center justify-content-between">
				<!-- Content -->
				<div class="col-md-6 col-xl-4">
					<h2 class="fs-1">Today's Top Free Live Courses</h2>
					<p>How promotion excellent curiosity yet attempted happiness prosperous impression had conviction For
						every delay death ask to style Me mean able my by in they Extremity now strangers contained.</p>
				</div>

				<!-- Course video START -->
				<div class="col-md-6 col-xl-8">
					<div class="row">
						<!-- Slider START -->
						<div class="tiny-slider arrow-round arrow-blur">
							<div class="tiny-slider-inner" data-autoplay="false" data-edge="2" data-arrow="true" data-dots="false" data-items-lg="1" data-items-xl="2">
								<!-- Card START -->
								<div>
									<div class="card p-2">
										<div class="position-relative">
											<!-- Image -->
											<img src="assets/images/courses/4by3/inVistion.jpg" class="card-img rounded-2" alt="Card image">
											<div class="card-img-overlay">
												<div class="position-absolute top-50 start-50 translate-middle">
													<!-- Video link -->
													<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
														<i class="fas fa-play"></i>
													</a>
												</div>
											</div>
										</div>

										<!-- Card body -->
										<div class="card-body">
											<!-- Title -->
											<h5><a href="#">Learn the tips to design in here</a></h5>
											<!-- Avatar group and button -->
											<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
												<!-- Avatar Group -->
												<div>
													<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live
														Students</h6>
													<ul class="avatar-group mb-2 mb-sm-0">
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/rady.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/rady.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/rady.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/rady.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<div class="avatar-img rounded-circle bg-primary">
																<span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
															</div>
														</li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
								<!-- Card END -->

								<!-- Card START -->
								<div>
									<div class="card p-2">
										<div class="position-relative">
											<!-- Image -->
											<img src="assets/images/courses/4by3/PHP max.png" class="card-img rounded-2" alt="Card image">
											<div class="card-img-overlay">
												<div class="position-absolute top-50 start-50 translate-middle">
													<!-- Video link -->
													<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
														<i class="fas fa-play"></i>
													</a>
												</div>
											</div>
										</div>

										<!-- Card body -->
										<div class="card-body">
											<!-- Title -->
											<h5><a href="#">Learning PHP for all course in here</a></h5>
											<!-- Avatar group and button -->
											<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
												<!-- Avatar Group -->
												<div>
													<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live
														Students</h6>
													<ul class="avatar-group mb-2 mb-sm-0">
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/himhey.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/himhey.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/himhey.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="assets/images/courses/4by3/himhey.jpg" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<div class="avatar-img rounded-circle bg-primary">
																<span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Card END -->
							</div>
						</div>
						<!-- Slider END -->
					</div>
				</div>
				<!-- Course video END -->
			</div>
			<!-- Live course END -->
		</div>
	</section>
	<!-- =======================
Live courses END -->
<?php } ?>
<!-- =======================
Action box START -->
<section class="py-5">
	<div class="container position-relative">
		<div class="row">
			<div class="col-12">
				<!-- SVG decoration START -->
				<figure class="position-absolute top-50 start-50 translate-middle ms-2">
					<svg>
						<path class="fill-white opacity-2" d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z">
						</path>
						<path class="fill-white opacity-2" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z">
						</path>
						<path class="fill-white opacity-2" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z">
						</path>
						<path class="fill-white opacity-2" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z">
						</path>
					</svg>
				</figure>
				<!-- SVG decoration END -->


			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Action box END -->
<?php } ?>
</main>
<!-- **************** MAIN CONTENT END **************** -->