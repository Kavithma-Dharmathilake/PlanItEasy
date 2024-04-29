<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URLROOT ?>public/css/payment.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>public/css/eventplannerdash.css">

  <title>Pay Page</title>
</head>

<body>

  <main>
    <div class="main-container">
      <div class="checkout-form">

        <form action="<?php echo URLROOT ?>customers/Advpayement/<?php echo $data['rid']; ?>/<?php echo $data['bid']; ?>/<?php echo $data['price'] ?>" method="POST" id="payment-form">
          <div class="info-container">

            <h2>User information</h2>
            <div class="form-control">
              <label for="checkout-email">Name</label>
              <div>
                <span class="fa fa-envelope"></span>
                <input type="text" name="fname" placeholder="Enter Your Name" value="<?php echo $_SESSION['user_name'] ?>" readonly>
              </div>
            </div>
            <div class="form-control">
              <label for="checkout-phone">E-mail</label>
              <div>
                <span class="fa fa-phone"></span>
                <input type="email" name="email" placeholder="Email Address" value="<?php echo $_SESSION['user_email'] ?>" readonly>
              </div>
            </div>

            <br>

            <h2>Event Information</h2>
            <div class="form-control">
              <label for="checkout-name">Budget ID</label>
              <div>
                <span class="fa fa-user-circle"></span>
                <input type="number" type="number" name="budget" value="<?php echo $data['bid'] ?>" readonly>
              </div>
            </div>
            <div class="form-control">
              <label for="checkout-address">Event ID</label>
              <div>
                <span class="fa fa-home"></span>
                <input type="number" name="event" value="<?php echo $data['rid'] ?>" readonly>
              </div>
            </div>

            </br>

            <h2>Payment Information</h2>
            <div class="form-control">
              <label for="checkout-name">Amount</label>
              <div>
                <span class="fa fa-user-circle"></span>
                <input type="number" name="amount" value="<?php echo $data['price'] ?>" readonly>
              </div>
            </div>
            <div class="form-control">
              <label for="cardnumber">Card Number</label>
              <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://js.stripe.com; style-src 'self' 'unsafe-inline' https://js.stripe.com;">
              <div id="card-element" class="form-control">
                <!-- a Stripe Element will be inserted here. -->
              </div>

              <!-- Used to display form errors -->
              <div id="card-errors" role="alert"></div>
            </div>
       

         

      </div>

      <div class="form-control-btn">
        <button>Continue</button>
      </div>

      </form>
    </div>

    <div class="checkout-details">
      <header>
        <h1>Checkout</h1>
      </header>

      <div class="card-img">
        <img src="<?php echo URLROOT ?>public/images/credit-card.svg" alt="ATMcard">
      </div>
    </div>
    </div>


  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="<?php echo URLROOT ?>public/js/charge.js"></script>
</body>

</html>