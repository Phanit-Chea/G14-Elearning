<body>

	<!-- Header START -->
	<header class="navbar-light navbar-sticky">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" href="/">
					<img class="light-mode-item navbar-brand-item" src="assets/images/courses/4by3/photo_2024-03-04_07-59-04.jpg" alt="logo">
					<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

					<!-- Nav Main menu START -->
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<!-- Nav item 1 Demos -->

						<!-- Nav item 2 Pages -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
							<ul class="dropdown-menu" aria-labelledby="pagesMenu">
								<!-- Dropdown submenu -->
								<li> <a class="dropdown-item" href="/trainers">Trainer</a></li>
								<li> <a class="dropdown-item" href="/">Home</a></li>
							</ul>
						</li>

						<!-- Nav item 3 Account -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
							<ul class="dropdown-menu" aria-labelledby="accounntMenu">
								<!-- Dropdown submenu -->
								<li class="dropdown-submenu dropend">
									<a class="dropdown-item dropdown-toggle" href="/trainers"><i class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
									<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
										<li> <a class="dropdown-item" href="/trainer_dashboard"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
										<li> <a class="dropdown-item" href="/trainer_manage_course"><i class="bi bi-basket-fill fa-fw me-1"></i>Course</a> </li>
										<li> <a class="dropdown-item" href="/trainer_create_course"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create
												Course</a> </li>
										<li> <a class="dropdown-item" href="/trainer_manage_category"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Category</a> </li>
										<li> <a class="dropdown-item" href="/trainer_create_category"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create Category</a> </li>
										<li> <a class="dropdown-item" href="/trainer_manage_earning"><i class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
										<li> <a class="dropdown-item" href="/trainer_manage_students"><i class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
										<li> <a class="dropdown-item" href="/trainer_manage_orders"><i class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
										<li> <a class="dropdown-item" href="/trainer_manage_payout"><i class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
									</ul>
								</li>

								<hr class="dropdown-divider">
						</li>
						<li> <a class="dropdown-item" href="/trainer_edit_profile"><i class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
						<li> <a class="dropdown-item" href="instructor-setting.html"><i class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
						<li> <a class="dropdown-item" href="instructor-delete-account.html"><i class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>
					</ul>
					</li>

					<!-- Nav Search START -->
					<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
						<div class="nav-item w-100">
							<form class="position-relative">
								<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
								<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
							</form>
						</div>
					</div>
					<!-- Nav Search END -->
				</div>
				<!-- Main navbar END -->

				<!-- Profile START -->
				<div class="dropdown ms-1 ms-lg-0">
					<a  class="avatar avatar-sm p-0" href="/student" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/<?php echo $profileImage; ?> " alt="avatar">
					</a>
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
