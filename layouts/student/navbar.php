<body>

	<!-- Header START -->
	<header class="navbar-light navbar-sticky">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" href="/">
					<img class="light-mode-item navbar-brand-item" src="assets/images/courses/4by3/logo2.jpg" alt="logo">
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
								<?php
								$router = '/';
								if (isset($_SESSION['user'])) {
									$user_id = $_SESSION['user']['user_id'];
									$role = $_SESSION['user']['role_id'];
									if ($role == 2) {
										$router = '/';
									} else if ($role == 1 || $role == 3) {
										$router = '/';
									}

								?>
									<!-- Dropdown submenu -->
									<li> <a class="dropdown-item" href="<?=$router?>">Trainer</a></li>
									<li> <a class="dropdown-item" href="<?=$router?>">Home</a></li>
								<?php }; ?>
							</ul>
						</li>

						<!-- Nav item 3 Account -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
							<ul class="dropdown-menu" aria-labelledby="accounntMenu">
								<!-- Dropdown submenu -->
								<li class="dropdown-submenu dropend">
									<a class="dropdown-item dropdown-toggle" href="/trainers"><i class="fas fa-user-tie fa-fw me-1"></i>My Account</a>
									<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
										<li> <a class="dropdown-item" href="/student_course"><i class="bi bi-grid-fill fa-fw me-1"></i>My course</a> </li>
										<li> <a class="dropdown-item" href="/student"><i class="bi bi-basket-fill fa-fw me-1"></i>Payment Info</a> </li>
										
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
					<a class="avatar avatar-sm p-0" href="/student" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/<?php echo $profileImage; ?> " alt="avatar">
					</a>
					
				</div>
				<!-- Profile START -->
			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>