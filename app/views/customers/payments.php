<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/customer.css">


</head>

<body>
    <div class="dash-container">
        <aside>
            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp">man</span>
                    <h3>Create New Event</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/ongoing">
                    <span class="material-icons-sharp">calendar_today</span>
                    <h3>Ongoing Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/complete">
                    <span class="material-icons-sharp">event_available</span>
                    <h3>Completed Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments" class="active">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/viewquote">
                    <span class="material-icons-sharp"> note_add</span>
                    <h3>supplier quotation</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile">
                    <span class="material-icons-sharp">person</span>
                    <h3>profile</h3>
                </a>
                <a href="<?php echo URLROOT; ?>user/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>


        </aside>



        <div class="container">
            <div class="main-content">
                <p class="text">PlanItEasy</p>
            </div>

            <div class="centre-content">
                <h1 class="price">Total payment 2499.00<span></span></h1>
            </div>

            <div class="last-content">
                <button type="button" class="pay-now-btn">Apply Coupons</button>
                <button type="button" class="pay-now-btn">Pay with Netbanking</button>

                <!-- <button type="button" class="pay-now-btn">
          Netbanking options
          </button> -->
            </div>

            <div class="card-details">
                <p>Pay using Credit or Debit card</p>

                <div class="card-number">
                    <label> Card Number </label>
                    <input type="text" class="card-number-field" placeholder="###-###-###" />
                </div>
                <br />
                <div class="date-number">
                    <label> Expiry Date </label>
                    <input type="text" class="date-number-field" placeholder="DD-MM-YY" />
                </div>

                <div class="cvv-number">
                    <label> CVV number </label>
                    <input type="text" class="cvv-number-field" placeholder="xxx" />
                </div>
                <div class="nameholder-number">
                    <label> Card Holder name </label>
                    <input type="text" class="card-name-field" placeholder="Enter your Name" />
                </div>
                <button type="submit" class="submit-now-btn">submit</button>
            </div>
        </div>
    </div>

</body>

</html>