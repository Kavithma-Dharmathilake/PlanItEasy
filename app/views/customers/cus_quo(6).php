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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/customer.css">
    <script>
      function showAlertWithTextarea() {
          var text = prompt("Enter your text:");
          if (text !== null) {
              alert("You entered the following text:\n" + text);
          }
      }
  </script>
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
          <a href="customer main.html">
            <span class="material-icons-sharp">calendar_today</span>
            <h3>Ongoing Events</h3>
          </a>
          <a href="#" class="active">
            <span class="material-icons-sharp">event_available</span>
            <h3>Completed Events</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">man</span>
            <h3>Event Planners</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">list_alt</span>
            <h3>Orders</h3>
            <span class="message-count">26</span>
          </a>
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
      <form action="" method="get">
    <div class="dash-container">
      <main>
        <!------------End of insights------------>
        <div class="recent-trans">
          <table>
            <thead>
                <tr>
                
                    <td class="C_topic_2" >Other Services</td>
                    
                  </tr>
                  
            </thead>
            <tbody>
                <tr>
                   
                    <td  colspan="2" class="equal-width">
                        <label class="container">music crews/DJ 
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                        
                      </td>
                      <td>
                        <label  class="container">Dressings
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                      </td>

                  </tr>

                  <tr>
                   
                    <td  colspan="2" class="equal-width">
                        <label class="container">honeymoon venue
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                        
                      </td>
                      <td>
                        <label  class="container">wedding cars
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                      </td>

                  </tr>
                  
                  
  
               
  
  
             

             <tr>
  <td></td>
  
  <td  class="button-container">
    <a href="cus_quo(4).html" class="cus_c1m">Previous &raquo;</a>
    <button class="container2" id="btn">
      <p id="btnText">Submit</p>
      <div class="check-box">
        <svg xmlns="" viewBox="0 0 50 50">
          <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
        </svg>
      </div>
    </button>
  </td>
</tr>

            <br><br>
            

            </tbody>
          </table>
        </div>
      </main>
      <!--------------END OF MAIN-------------->
    </div>
  </form>
    </div>

    <script>


const btn = document.querySelector("#btn");
        const btnText = document.querySelector("#btnText");

        btn.onclick = () => {
            btnText.innerHTML = "Thanks";
            btn.classList.add("active");
        };
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function myFunction3() {
        document.getElementById("myDropdown3").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function myFunction4() {
        document.getElementById("myDropdown4").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function myFunction5() {
        document.getElementById("myDropdown5").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function myFunction6() {
        document.getElementById("myDropdown6").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('#lname')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>
  </body>
</html>
