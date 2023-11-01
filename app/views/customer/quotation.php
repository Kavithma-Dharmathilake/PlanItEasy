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
        <!------------End of insights------------>
        <div class="recent-trans">
          <table>
            <thead>
              <tr>

                <th colspan="2">Customer Quotation</th>

              </tr>
              <!--<tr>
                    <th width="10%"></th>
                    <th width="10%"></th>
                  </tr>-->
            </thead>
            <tbody>
              <tr>
                <td>
                  <label for="">Event Planners</label>
                  <div class="cus_c1">
                    <input type="text">
                  </div>

                </td>
                <td>
                  <label for="">Number of Participants</label>
                  <div class="cus_c1">
                    <input type="text">
                  </div>
                </td>
              </tr>


              <tr>
                <td>
                  <label for="">Theme</label>

                  <div class="cus_c1">
                    <input type="text">
                  </div>
                </td>
                <td>
                  <label for="">Budget</label>

                  <div class="cus_c1">
                    <input type="text">
                  </div>
                </td>
              </tr>


              <tr>
                <td>
                  <label for="">Date</label>
                  <div class="cus_c2">
                    <input type="date" name="date">
                  </div>
                </td>
                <td>
                  <label for="">Time</label>
                  <br>
                  <label for="fromTime">From:</label>
                  <input type="time" class="cus_c2" required>

                  <label for="toTime">To:</label>
                  <input type="time" class="cus_c2" required>
                </td>
              </tr>


              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Photography
                      </div>
                      <!-- Add Buttons Here -->
                      <div class="buttons">
                        <button class="customer-button" onclick="showAlertWithTextarea()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Videography
                      </div>
                      <!-- Add Buttons Here -->
                      <div class="buttons">
                        <button class="customer-button" onclick="showAlertWithTextarea()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Cacke
                      </div>
                      <!-- Add Buttons Here -->
                      <div class="buttons">
                        <button class="customer-button" onclick="showAlertWithTextarea()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Reciption Hall
                      </div>
                      <!-- Add Buttons Here -->
                      <div class="buttons">
                        <button class="customer-button" onclick="showAlertWithTextarea()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Catering
                      </div>
                      <!-- Add Buttons Here -->
                      <div class="buttons">
                        <button class="customer-button" onclick="showAlertWithTextarea()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Decorations
                      </div>
                      <!-- Add Buttons Here -->
                      <div class="buttons">
                        <button class="customer-button" onclick="showAlertWithTextarea()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Music crue/DJ
                      </div>
                      <!-- Add Buttons Here 
                    
                    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>
                    
                    
                    
                    
                    
                    -->
                      <div class="buttons">
                        <button class="customer-button" onclick="myFunction()">Need</button>
                        <button class="customer-button">Not Need</button>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>

              <tr>
                <th colspan="2">
                  <div class="cus_c3">
                    <div class="customer-card">
                      <div class="right-align">
                        Other
                      </div>
                      <input type="text" class="customer-input">
                    </div>
                  </div>
                </th>
              </tr>
              <tr>
                <th colspan="2">
                  <div class="buttons">
                    <br>
                    <input type="submit" value="Submit" class="submit-button">
                  </div>
                </th>

              </tr>
            </tbody>
          </table>



        </div>

      </main>

  </div>

</body>

</html>