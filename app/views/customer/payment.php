<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- MATERIAL CDN -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="customer.css" />
    <link rel="stylesheet" href="customer.css" />
  </head>
  <body>
    <ul>
      <li><img src="/Users/maho/Documents/home/images/logo.PNG" />
        <h2>PlanItEasy</h2></li>
      <li style="float:right"><a href=""><p>Hey, <b>pawani</b></p>
        <small class="text-muted">Customer</small>
        <img src="images/photo2.jpg" /> </a></li>
    </ul>

    <div class="dash-container">
      <aside>
        
        <div class="sidebar">
          <a href="#" class="active">
            <span class="material-icons-sharp">man</span>
            <h3>Create New Event</h3>
          </a>
          <a href="#" class="">
            <span class="material-icons-sharp">calendar_today</span>
            <h3>Ongoing Events</h3>
          </a>
          <a href="customer complete.html">
            <span class="material-icons-sharp">event_available</span>
            <h3>Completed Events</h3>
          </a>

         <!-- <a href="#">
            <span class="material-icons-sharp">list_alt</span>
            <h3>Orders</h3>
            <span class="message-count">26</span>
          </a>-->
          <a href="#">
            <span class="material-icons-sharp">payments</span>
            <h3>Payments</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">message</span>
            <h3>Messages</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">person</span>
            <h3>profile</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
        </a>
        </a>
        </div>
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
            <input
              type="text"
              class="card-number-field"
              placeholder="###-###-###"
            />
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
            <input
              type="text"
              class="card-name-field"
              placeholder="Enter your Name"
            />
          </div>
          <button type="submit" class="submit-now-btn">submit</button>
        </div>
      </div>
    </div>
  </body>
</html>