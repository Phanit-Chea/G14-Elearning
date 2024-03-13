<?php
session_start();
require 'layouts/navbar.php';
// require 'models/cart.model.php';

// $user_id = $_SESSION['user']['user_id'];
// $carts = getCart($user_id);

$userId = $_SESSION['user']['user_id'] ?? null;
$carts = $userId ? getCart($userId) : [];
$count = count($carts);

require 'controllers/payment/payment.controller.php';

?>

<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="/" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue courses</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Order cart</p>
                    <p class="mb-0">You have <?php echo($count)?> items in your cart</p>
                  </div>
                  <!-- <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div> -->
                </div>

                <!-- =============== display cart ========= -->
                <?php foreach ($carts as $num => $cart) : ?>
                  
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">

                        <div>
                          <img
                            src="assets/images/courses/4by3/<?php echo $cart['course_image'] ?>"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 85px;">
                        </div>

                        <div class="ms-3">
                          <h5><?= $cart['course_name'] ?></h5>
                          <!-- <p class="small mb-0">256GB, Navy Blue</p> -->
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <!-- <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div> -->
                        <div style="width: 80px;">
                          <h5 class="mb-0"><?= $cart['course_price'] . "$" ?></h5>
                        </div>

                        <!-- delete button -->
                        <a onclick="return confirm('Do you want to delete this cart?')" href="controllers/cart/cart.delete.controller.php?id=<?= $cart['cart_id'] ?>" style="color: red;"><i class="fas fa-trash-alt"></i></a>

                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              </div>

              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form action='#' method="POST" class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <label class="form-label" pattern="^(?!(000|666|9))\d{3} (?!00)\d{2} (?!0000)\d{4}$" for="typeName">Cardholder's Name</label>
                        <input type="text" id="typeName" name='cardName' class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                        <!-- <p class="text-danger"><?= $cardNameMsg ?></p> -->
                      </div>

                      <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeText">Card Number</label>
                        <input type="number" id="typeText" name="cardNumber" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <!-- <p class="text-danger"><?= $cardNumberMsg ?></p> -->
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <label class="form-label" for="typeExp">Expiration</label>
                            <input type="text" name="expDate" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <!-- <p class="text-danger"><?= $expDateMsg ?></p> -->
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <label class="form-label" for="typeText">Cvv</label>
                            <input type="password" name="cvv" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <!-- <p class="text-danger"><?= $cvvMsg ?></p> -->
                          </div>
                        </div>
                      </div>

                      <!-- <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeText">Card Number</label>
                        <input type="date" id="typeText" name="cardNumber" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" /> -->
                        <!-- <p class="text-danger"><?= $cardNumberMsg ?></p> -->
                      <!-- </div> -->

                    <hr class="my-4">

                    <?php
                    $totalPrice = 0;
                    foreach ($carts as $cart) {
                        $totalPrice += $cart['course_price'];
                    }
                    ?>
                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total price</p>
                      <p class="mb-2"><?= $totalPrice . "$" ?></p>
                    </div>

                    <button type="submit" class="w-100 btn btn-info btn-lg">
                          <div class="d-flex justify-content-center">
                            <span>Checkout</span>
                          </div>
                    </button>

                  </div>
                  </form>

                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
