

<?php 
 require APPROOT .'/views/inc/header.php'
?>

    <div class="regForm" style="margin-left:300px; margin-top:70px" >

    <section class="reg_form_container">
      <header>Registration Form</header>
      <form method="post" action="" class="form">
        <div class="input-box">
          <label>Full Name<span style="color:red"><sup>*</sup></span></label>
          <input type="text" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Email Address<span style="color:red"><sup>*</sup></label>
          <input type="text" placeholder="Enter email address" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number<span style="color:red"><sup>*</sup></label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date<span style="color:red"><sup>*</sup></label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender<span style="color:red"><sup>*</sup></h3>
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
          <label>Address<span style="color:red"><sup>*</sup></label>
          <input type="text" placeholder="Enter address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <input type="text" placeholder="Enter your city" required />
        </div>

        <div class="input-box address">
            <label>Business Details<span style="color:red"><sup>*</sup></label>
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
        <label>Upload proof of documents of your business (Certification of Incorporation of a Private Company)<span style="color:red"><sup>*</sup> </label>
        </div>

        <input type="file" id="myFile" name="filename" /hidden>
        <label class="upload_btn" for="myFile">Choose File</label>
        <div class="column">
          <div class="input-box">
            <label>Password<span style="color:red"><sup>*</sup></label>
            <input type="password" placeholder="Enter password" required />
          </div>
          <div class="input-box">
            <label>Confirm Password<span style="color:red"><sup>*</sup></label>
            <input type="password" placeholder="Re-enter Password" required />
          </div>
        </div>

        <button class="btn">Submit</button>

      </form>

    </section>

    </div>
    
  </body>
</html>