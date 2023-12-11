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
                
                    <td class="C_topic_2" >Decorations</td>
                    
                  </tr>
                  
            </thead>
            <tbody>
                <tr>
                    <td class="equal-width">
                      <label for="">Theme Preferences</label><br><br>
                      <select class="classic">
                        <option>Traditional</option>
                        <option>Romantic</option>
                        <option>Modern</option>
                        <option>Beach</option>
                        <option>Tropical</option>
                      </select>
                    </td>
                    
                    <td></td>
                    
                    <td  colspan="2" class="equal-width">
                        <label for="">Floral Arrangements</label><br><br>
                        <select class="classic">
                          <option>Roses</option>
                          <option>Sunflowers</option>
                          <option>Lilies </option>
                          <option>Mixed Blooms </option> 
                        </select>
                      </td>

                  </tr>

                  <tr>
                    <td class="equal-width">
                      <label for="">Lighting</label><br><br>
                      <select class="classic">
                        <option>Chandeliers</option>
                        <option>Fairy Lights</option>
                        <option>Edison Bulbs</option>
                        <option>Candles</option>
                      </select>
                    </td>
                    
                    <td></td>
                    
                    <td  colspan="2" class="equal-width">
                        <label for="">Any specific colors for the flowers</label><br><br>
                        <select class="classic">
                          <option>Red</option>
                          <option>Pink</option>
                          <option>White </option>
                          <option>Blue </option>
                          <option>Yellow</option>
                          <option>Purple </option>
                          <option>Pastels </option>
                        </select>
                      </td>

                  </tr>
                  
  
                
  
  
              <tr>
                <td class="equal-width">
                  <label  class="container">Poruwa & Setty back                    
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </td>
                
                  
                <td></td>
                    
                <td class="equal-width">
                    <label for="">Specific ideas</label><br><br>
                    <input type="text" class="cus_c1m2-1" name="shorts" required />
                  </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td colspan="2" class="button-container">
              <a href="cus_quo(4).html" class="cus_c1m">Skip &raquo;</a>
              <a href="cus_quo(2).html" class="cus_c1m">Previous &raquo;</a>
              <a href="cus_quo(4).html" class="cus_c1m">Next &raquo;</a>
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
