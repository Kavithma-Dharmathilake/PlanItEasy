

<?php 
 require APPROOT .'/views/inc/header.php'
?>

    <div class="regForm" style="margin-left:300px; margin-top:70px" >

    <section class="reg_form_container">
      <header>Registration Form</header>
      <form method="post" action="admin/userreq" class="form">

        <div class="input-box">
          <label>Full Name<span style="color:red"><sup>*</sup></span></label>
          <input type="text" placeholder="Enter full name" name="name" value="<?php echo $data['name']; ?>" />
        </div>
        
        <div class="input-box">
          <label>Email Address<span style="color:red"><sup>*</sup></label>
          <input type="text" placeholder="Enter email address" name="email" value="<?php echo $data['email']; ?>" />
        </div>
        
        <div class="column">
          <div class="input-box">
            <label>Phone Number<span style="color:red"><sup>*</sup></label>
            <input type="number" placeholder="Enter phone number"  name="contact" value="<?php echo $data['phone']; ?>" />
          </div>
          <div class="input-box">
            <label>Birth Date<span style="color:red"><sup>*</sup></label>
            <input type="date" placeholder="Enter birth date" name="bday" value="<?php echo $data['bday']; ?>" />
          </div>
        </div>
        
        <div class="gender-box">
          <h3>Gender<span style="color:red"><sup>*</sup></h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" />
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
          <input type="text" placeholder="Enter address" value="<?php echo $data['address']; ?>"/>
          <input type="text" placeholder="Enter street address line 2"  />
          <input type="text" placeholder="Enter your city"  />
        </div>

        <div class="input-box address">
            <label>Business Details<span style="color:red"><sup>*</sup></label>
            <input type="text" placeholder="Enter your Business name" value="<?php echo $data['bname']; ?>" />
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
                <input type="number" placeholder="Enter Business Registration Number" value="<?php echo $data['bno']; ?>" />
              </div>
              <input type="text" placeholder="Enter Business place address" value="<?php echo $data['baddress']; ?>" />
        </div>

        <div class="input-box address">
        <label>Upload proof of documents of your business (Certification of Incorporation of a Private Company)<span style="color:red"><sup>*</sup> </label>
        </div>

        <input type="file" id="myFile" name="proof">
        <label class="upload_btn" for="myFile">Choose File</label>


        <div class="column">
          <div class="input-box">
            <label>Password<span style="color:red"><sup>*</sup></label>
            <input type="password" placeholder="Enter password" value="<?php echo $data['password']; ?>" />
          </div>
          <div class="input-box">
            <label>Confirm Password<span style="color:red"><sup>*</sup></label>
            <input type="password" placeholder="Re-enter Password" value="<?php echo $data['confirm_password']; ?>" />
          </div>
        </div>

        <button class="btn">Submit</button>

      </form>

    </section>

    </div>
    
  </body>
</html>