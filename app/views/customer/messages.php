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
           <div class="chat-container">
      <div class="messages" id="messages">
        <!-- Display messages here -->
      </div>
      <input type="text" id="message-input" placeholder="Type your message" />
      <button id="send-button">Send</button>
    </div>
    <script src="message.js"></script>
      </div>
    </div>
  </body>
</html>
