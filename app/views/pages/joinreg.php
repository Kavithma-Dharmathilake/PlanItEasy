

<?php 
 require APPROOT .'/views/inc/header.php'
?>

    <div class="regForm" style="margin-left:300px; margin-top:70px" >

    <section class="reg_form_container">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <input type="text" placeholder="Enter your city" required />
        </div>

        <div class="input-box address">
            <label>Business Details</label>
            <input type="text" placeholder="Enter your Business name" required />
            <div class="column">
                <div class="select-box">
                    <select>
                      <option hidden>Service Type</option>
                      <option>Event Planner</option>
                      <option>Photographer</option>
                      <option>Videographer</option>
                      <option>Decorations</option>
                      <option>Cake Service</option>
                      <option>Reception hall</option>
                      <option>Catering Service</option>
                    </select>
                  </div>
                <input type="number" placeholder="Enter Business Registration Number"required />
              </div>
              <input type="text" placeholder="Enter Business place address" required />
        </div>

        <div class="input-box address">
        <label>Upload proof of documents of your business</label>
        </div>

        <input type="file" id="myFile" name="filename" /hidden>
        <label class="upload_btn" for="myFile">Choose File</label>

        <button class="btn">Submit</button>

      </form>

    </section>

    </div>
    
  </body>
</html>