<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">

  <title>Pay Page</title>
</head>

<body>

  <aside>

    <div class="sidebar">
      <a href="<?php echo URLROOT; ?>customers">
        <span class="material-icons-sharp" class="active">grid_view</span>
        <h3>Dashboard</h3>
      </a>
      <a href="<?php echo URLROOT; ?>customers/events">
        <span class="material-icons-sharp">man</span>
        <h3>Events</h3>
      </a>
      <a href="<?php echo URLROOT; ?>customers/payments">
        <span class="material-icons-sharp">payments</span>
        <h3>Payments</h3>
      </a>
      <a href="<?php echo URLROOT; ?>customers/message">
        <span class="material-icons-sharp">message</span>
        <h3>Messages</h3>
      </a>
      <a href="<?php echo URLROOT; ?>customers/profile">
        <span class="material-icons-sharp">person</span>
        <h3>profile</h3>
      </a>
      <a href="<?php echo URLROOT; ?>users/logout">
        <span class="material-icons-sharp">logout</span>
        <h3>Logout</h3>
      </a>
    </div>


  </aside>
  <div class="container">
    <h2 class="my-4 text-center">PlanItEasy Payment </h2>
    <form action="<?php echo URLROOT ?>customers/payement/<?php echo $data['rid']; ?>/<?php echo $data['bid']; ?>/<?php echo $data['price'] ?>" method="post" id="payment-form">
      <div class="form-row">
        <input type="text" name="fname" placeholder="Name" value="<?php echo $_SESSION['user_name'] ?>" readonly>
        <input type="text" name="lname" placeholder="Last Name" value=<?php echo $_SESSION['user_name'] ?> readonly hidden>
        <input type="email" name="email" placeholder="Email Address" value="<?php echo $_SESSION['user_email'] ?>" readonly>
        <label>Amount</label>
        <input type="number" name="amount" value="<?php echo $data['price'] ?>" readonly>
        <label>Event ID</label>
        <input type="number" name="event" value="<?php echo $data['rid'] ?>" readonly>
        <label>Budget ID</label>
        <input type="number" name="budget" value="<?php echo $data['bid'] ?>" readonly>

        <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://js.stripe.com; style-src 'self' 'unsafe-inline' https://js.stripe.com;">
        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="<?php echo URLROOT ?>public/js/charge.js"></script>
</body>

</html>