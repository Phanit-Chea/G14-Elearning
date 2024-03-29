<?php
require "models/cart.model.php";
require "models/payment.model.php";
?>
<!-- Header START -->
<header class="navbar-light navbar-sticky navbar-transparent">
  <!-- Logo Nav START -->
  <nav class="navbar navbar-expand-xl fixed-top bg-white">
    <div class="container">
      <!-- Logo START -->
      <a class="navbar-brand" href="/">
        <!-- <img class="light-mode-item navbar-brand-item" src="assets/images/courses/4by3/photo_2024-03-04_07-59-04.jpg" alt="logo"> -->
        <img class="light-mode-item navbar-brand-item" src="assets/images/courses/4by3/logo2.jpg" alt="logo" style="width: 125px; height: 75px;">
        <!-- <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo"> -->
      </a>
      <!-- Logo END -->

      <!-- Responsive navbar toggler -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="me-2"><i class="fas fa-search fs-5"></i></span>
      </button>

      <!-- Category menu START -->
      <ul class="navbar-nav navbar-nav-scroll dropdown-clickable">
        <li class="nav-item dropdown dropdown-menu-shadow-stacked">


          <ul class="dropdown-menu z-index-unset" aria-labelledby="categoryMenu">

            <li> <a class="dropdown-item" href="/signin?role=3">Sign In</a> </li>

            <!-- Dropdown submenu -->
            <li class="dropdown-submenu dropend">
              <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                <!-- dropdown submenu open right -->
                <li class="dropdown-submenu dropend z-index-unset">
                  <a class="dropdown-item dropdown-toggle" href="#">Web development</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li> <a class="dropdown-item" href="#">Css</a> </li>
                    <li> <a class="dropdown-item" href="#">Java script</a> </li>
                    <li> <a class="dropdown-item" href="#">Angular</a> </li>
                    <li> <a class="dropdown-item" href="#">Php</a> </li>
                    <li> <a class="dropdown-item" href="#">HTML</a> </li>
                    <li> <a class="dropdown-item" href="#">React</a> </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item" href="#">Data science</a> </li>
                <li> <a class="dropdown-item" href="#">Mobile development</a> </li>
                <li> <a class="dropdown-item" href="#">Programing language</a> </li>
                <li> <a class="dropdown-item" href="#">Software testing</a> </li>
                <li> <a class="dropdown-item" href="#">Software engineering</a> </li>
                <li> <a class="dropdown-item" href="#">Software development tools</a> </li>
              </ul>
            </li>
            <!-- Dropdown submenu -->
            <li class="dropdown-submenu dropend">
              <!-- <a class="dropdown-item dropdown-toggle" href="#">Marketing</a> -->
              <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                <div class="row p-4">
                  <!-- Dropdown column item -->
                  <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                    <h6 class="mb-0">Get started</h6>
                    <hr> <!-- Divider -->
                    <ul class="list-unstyled">
                      <li> <a class="dropdown-item" href="#">Market research</a> </li>
                      <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                      <li> <a class="dropdown-item" href="#">Consumer behavior</a> </li>
                      <li> <a class="dropdown-item" href="#">Digital marketing</a> </li>
                      <li> <a class="dropdown-item" href="#">Marketing ethics</a> </li>
                      <li> <a class="dropdown-item" href="#">Social media marketing</a> </li>
                      <li> <a class="dropdown-item" href="#">Public relations</a> </li>
                      <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                      <li> <a class="dropdown-item" href="#">Decision science</a> </li>
                      <li> <a class="dropdown-item" href="#">SEO</a> </li>
                      <li> <a class="dropdown-item" href="#">Business marketing</a> </li>
                    </ul>
                  </div>

                  <!-- Dropdown column item -->
                  <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                    <h6 class="mb-0">Degree</h6>
                    <hr> <!-- Divider -->
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-01.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">American Century University, New Mexico</a></h6>
                        <p class="mb-0 small">Bachelor of computer science</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-02.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Indiana College of - Bloomington</a></h6>
                        <p class="mb-0 small">Masters of computer science</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-03.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">College of South Florida</a></h6>
                        <p class="mb-0 small">Medical science college</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-01.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Andeerson Campus</a></h6>
                        <p class="mb-0 small">Bachelor of computer science</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex position-relative">
                      <img src="assets/images/client/uni-logo-04.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">University of South California</a></h6>
                        <p class="mb-0 small">Masters of business development</p>
                      </div>
                    </div>
                  </div>

                  <!-- Dropdown column item -->
                  <div class="col-xl-6 col-xxl-4">
                    <h6 class="mb-0">Certificate</h6>
                    <hr> <!-- Divider -->
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Google SEO certificate</a></h6>
                        <p class="mb-0 small">No prerequisites</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Business Development Executive(BDE)</a></h6>
                        <p class="mb-0 small">No prerequisites</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Facebook social media marketing</a></h6>
                        <p class="mb-0 small">Expert advice</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Creative graphics design</a></h6>
                        <p class="mb-0 small">No prerequisites</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                      <!-- SVG decoration -->
                      <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                        <svg width="92.6px" height="135.2px">
                          <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z"></path>
                          <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z"></path>
                          <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z"></path>
                          <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z"></path>
                          <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                          <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                        </svg>
                      </figure>
                      <!-- Body -->
                      <div class="card-body">
                        <!-- Title -->
                        <h5 class="card-title text-white mb-2">Access 25K Online courses from 120 institutions, Start today!</h5>
                        <p class="text-white text-opacity-75">Here is the description of premium features which will allow users to get benefits and save a lot of money</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-dark mb-0">Purchase Premium</a>
                      </div>
                    </div>
                  </div>


                </div>

                <!-- Advertisement -->
                <div class="row d-none">
                  <div class="col-12">
                    <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                      <!-- SVG decoration -->
                      <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                        <svg width="92.6px" height="135.2px">
                          <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z"></path>
                          <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z"></path>
                          <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z"></path>
                          <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z"></path>
                          <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                          <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                        </svg>
                      </figure>
                      <!-- Body -->
                      <div class="card-body">
                        <!-- Title -->
                        <h5 class="card-title text-white mb-2">Access 25K Online courses from 120 institutions, Start today!</h5>
                        <p class="text-white text-opacity-75">Here is the description of premium features which will allow users to get benefits and save a lot of money</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-dark mb-0">Purchase Premium</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>
      </ul>
      <!-- Category menu END -->

      <!-- Main navbar START -->
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <!-- Nav Search START -->
        <div class="col-xl-8">
          <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
            <div class="nav-item w-100">
              <form class="rounded position-relative ">
                <input id="search" class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
              </form>
            </div>
          </div>
        </div>
        <!-- Nav Search END -->
      </div>
      <!-- Main navbar END -->

      <!-- ================================================= cart =============================================== -->
      <!-- Right header content START -->
      <!-- Add to cart -->
      <?php
      $count = 0;
      if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['user_id'];
        $carts = getCart($user_id);
        foreach($carts as $cart){
          if(!isPaymentExist($cart['courses_id'], $user_id)){
            $count+=1;
          }
        }
      }

      ?>
      <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'login') : ?>
        <div class="navbar-nav position-relative overflow-visible me-3">
          <a href="/cart" class="nav-link"> <i class="fas fa-shopping-cart fs-5"></i></a>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success mt-xl-2 ms-n1"><?php echo ($count) ?>
            <span class="visually-hidden">unread messages</span>
          </span>
        </div>
      <?php endif; ?>
      <!-- Language -->
      <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') : ?>
        <ul class="navbar-nav navbar-nav-scroll me-3 d-none d-xl-block">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-globe me-2"></i>
              <span class="d-none d-lg-inline-block">Pages</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end min-w-auto" aria-labelledby="language">
              <?php
              $router = '/';
              if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']['user_id'];
                $role = $_SESSION['user']['role_id'];
                if ($role == 2) {
                  $router = '/student';
                } else if ($role == 1 || $role == 3) {
                  $router = '/trainer_dashboard';
                }

              ?>
                <li> <a class="dropdown-item" href="<?= $router ?>"><img class="fa-fw me-2" alt="">Student</a></li>
                <li> <a class="dropdown-item" href="<?= $router ?>"><img class="fa-fw me-2" alt="">Teacher</a></li>
              <?php }; ?>
            </ul>
          </li>
        </ul>
      <?php endif; ?>

      <!-- Signout button  -->
      <div class="navbar-nav d-none d-lg-inline-block">
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'login') : ?>
          <a href="../controllers/signout/signout.controller.php" class="btn btn-danger-soft mb-0"><i class="fas fa-sign-in-alt me-2"></i>Sign out</a>
        <?php else : ?>
          <a href="/signin" class="btn btn-danger-soft mb-0">Sign in</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') : ?>
          <?php
          if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role_id'] != 3) { ?>
              <a href="/student">
                <img class="rounded-circle me-lg-2" src="../assets/images/avatar/<?= isset($_SESSION['user']) ? $_SESSION['user']['image'] : 'p.jpg' ?>" alt="" style="width: 50px; height:50px;"></a>
          <?php }
          } else {
            $imgPF = "../assets/images/avatar/p.jpg";
          }
          ?>
          <?php if (isset($imgPF)) {
            echo '<img class="rounded-circle me-lg-2" src="../assets/images/avatar/p.jpg" alt="" style="width: 50px; height:50px;">';
          }
          ?>
        <?php endif; ?>
      </div>
      <!-- Right header content END -->

    </div>
  </nav>
  <!-- Logo Nav END -->
</header>
<!-- Header END -->