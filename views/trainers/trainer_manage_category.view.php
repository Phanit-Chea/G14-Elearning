<?php
require 'layouts/trainer/navbar.php';
require 'models/admin.model.php';
?>

<div class="dropdown ms-1 ms-lg-0">
	<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
		<li class="px-3">
			<div class="d-flex align-items-center">
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

		<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>

		<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>

		<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>

		<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>

		<li>
			<hr class="dropdown-divider">
		</li>

		<li>
			<div class="modeswitch-wrap" id="darkModeSwitch">
				<div class="modeswitch-item">
					<div class="modeswitch-icon"></div>
				</div>
				<span>Dark mode</span>
			</div>
		</li>

	</ul>
</div>



<main>


	<section class="pt-0">

		<div class="container-fluid px-0">
			<div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;"></div>
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

											<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i><?php echo (total_course($user_id)); ?> Courses</li>

										</ul>
									</div>

									<div class="d-flex align-items-center mt-2 mt-md-0">
										<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-modal">
											Create Category
										</button>

									</div>


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
										<a class="list-group-item active" href="/trainer_manage_category"><i class="bi bi-basket fa-fw me-2"></i>My Categories</a>
										<a class="list-group-item" href="/trainer_manage_course"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
										<a class="list-group-item" href="/trainer_manage_lesson"><i class="bi bi-basket fa-fw me-2"></i>My Lessons</a>
										<a class="list-group-item" href="/trainer_manage_video"><i class="bi bi-basket fa-fw me-2"></i>My Video</a>
										<a class="list-group-item" href="/trainer_manage_students"><i class="bi bi-people fa-fw me-2"></i>Students</a>
										<a class="list-group-item" href="/trainer_edit_profile"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
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
							<h3 class="mb-0">My Categoies List</h3>
						</div>



						<div class="card-body">

							<div class="row g-3 align-items-center justify-content-between mb-4">
								<!-- Search -->
								<div class="col-md-8">
									<form class="rounded position-relative">
										<input class="form-control pe-5 bg-transparent" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
									</form>
								</div>

							</div>
							<div class="table-responsive-lg border-0">
								<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
									<thead>
										<tr>
											<th scope="col" class="border-0 rounded-start">Category Title</th>
											<th scope="col" class="border-0 rounded-end">Action</th>
										</tr>
									</thead>
									<tbody id="search_category">
										<?php
										$categories = getData($user_id);
										foreach ($categories as $category) :

										?>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="w-100px">
															<img src="../../assets/images/categories/<?= $category['category_image'] ?>" class="rounded" alt="">
														</div>
														<div class="mb-0 ms-2">
															<h6><a href="#"><?= $category['category_name'] ?></a></h6>
															<div class="d-sm-flex">
																<p class="h6 fw-light mb-0 small me-3">
																	<i class="fas fa-table text-orange me-2"></i>
																	<?php echo nb_course_category($category['category_id']) ?> Course
																</p>
															</div>
														</div>
													</div>
												</td>

												<td>
													<div class="icons-container d-flex">
														<a onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-danger-soft btn-round mb-0" href="controllers/trainers/category/trainer_delete_category.controller.php?id=<?= $category['category_id'] ?>"><i class="fas fa-fw fa-times"></i></a>
														<button type='button' class="btn btn-sm btn-success-soft btn-round me-1 mb-0" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>"><i class="far fa-fw fa-edit"></i></button>
														<button type='button' class="btn btn-sm btn-success-soft btn-round mb-0 view-category" data-bs-toggle="modal" data-bs-target="#view_detail<?= $category['category_id'] ?>"><i class="fa-regular fa-eye"></i></button>
													</div>
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

	<!-- =========================== edit category ===================================== -->
	<?php
	$categories = getData($user_id);
	foreach ($categories as $category) :

	?>

		<div class="modal fade" id="edit-modal<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-secondary">
						<h5 class="modal-title text-warning " id="exampleModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body bg-secondary">
						<form action="controllers/trainers/category/trainer_edit_category.controller.php" method="post" enctype="multipart/form-data">
							<input type="hidden" class="form-control" value="<?= $category['category_id'] ?>" id="id" name="id">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" value="<?= $category['category_name'] ?>" id="name" name="name">
								<label for="floatingInput">Category Name</label>
							</div>

							<!--image  -->
							<div class="form-floating mb-3">
								<label for="image" class="form-label"></label>
								<input type="file" name="image" class="form-control text-white" id="image">
							</div>

							<div class="form-floating mb-4">
								<input type="text" class="form-control" value="<?= $category['category_description'] ?>" id="description" name="description">
								<label for="floatingPassword">Description</label>
							</div>
							<button type="submit" class="btn btn-warning text-black py-3 w-100 mb-4">Update Category</button>
						</form>
					</div>
				</div>
			</div>
		</div>



		<!-- ========================= show popup form when create category ================= -->


		<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-secondary">
						<h5 class="modal-title text-primary" id="exampleModalLabel">New Category</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body bg-secondary">
						<form action="controllers/trainers/category/trainerr_create_category.controller.php" method="post" enctype="multipart/form-data">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="name" name="name">
								<label for="floatingInput">Category Name</label>
							</div>
							<div class="form-floating mb-3">
								<label for="image" class="form-label"></label>
								<input type="file" name="image" class="form-control bg-white text-dark" id="image">
							</div>
							<div class="form-floating mb-4">
								<input type="text" class="form-control" id="description" name="description">
								<label for="floatingPassword">Description</label>
							</div>
							<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add Category</button>
						</form>
					</div>
				</div>
			</div>
		</div>



		<!-- ===========View button with data-bs-target attribute set to modal ID ===============-->


		<div class="modal fade" id="view_detail<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-secondary">
						<h5 class="modal-title text-primary" id="exampleModalLabel">Category Detail</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body bg-secondary">

						<div class="card-group">
							<div class="card">
								<img src="assets/images/categories/<?= $category['category_image'] ?>" class="card-img-top" alt="..." style="width: 500px; height: 230px;">
								<div class="card-body">
									<h5 class="card-title"><?= $category['category_name'] ?></h5>
									<p class="card-text"><?= $category['category_description'] ?></p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	<?php endforeach; ?>

</main>


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