<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- MATERIAL CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/customer.css">

</head>

<body>
  <div class="dash-container">

    <aside>
      <div class="top">
        <div class="logo">
          <img src="<?php echo URLROOT; ?>/public/images/logo.jpg">
          <h2>PlanItEasy</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>

      <div class="sidebar">

        <a href="#" class="active">
          <span class="material-icons-sharp">man</span>
          <h3>Create New Event</h3>
        </a>
        <a href="customer ongoing.html" class="">
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
        <a href="payment.html">
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
    <main>


      <main>
        <div class="insights">


          <div class="users">
            <span class="material-icons-sharp">man</span>
            <div class="middle">
              <div class="left">

                <h1><a href="">Select The Evet Planner</a></h1>
              </div>

            </div>

          </div>


          <div class="eventplanners">
            <span class="material-icons-sharp">groups</span>
            <div class="middle">
              <div class="left">

                <h1><a href="">Select Suppliers</a></h1>
              </div>

            </div>
          </div>


        </div>



  </div>

  </main>

  </div>

</body>

</html>