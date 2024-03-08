<?php 
require 'layouts/trainer/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="../vendor/js/validation_trainer_edit_profile.js"></script>
  <style>
    .error-message {
      color: red;
    }
    .error-border {
      border: 1px solid red;
    }
  </style>
</head>
<body class="bg-secondary">


<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title fw-bold ">Edit your profile</h5>
          <form action="#" method="POST" id="myForm" onsubmit="return validateForm()">
            <div class="mb-3">
              <label for="name" class="form-label fw-bold">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your new name" value="<?php echo $username; ?>">
              <div id="nameError" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-bold">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
              <div id="emailError" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword" onclick="togglePasswordVisibility()">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
              <div id="passwordError" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="profile" class="form-label fw-bold">Choose New Profile</label>
              <input type="file" class="form-control" id="profile" accept="image/*">
              <div id="profileError" class="error-message"></div>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill">Save change</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>