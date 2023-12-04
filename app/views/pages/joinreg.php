<?php
require APPROOT . '/views/inc/header.php'
  ?>

<div class="regForm" style="margin-left:300px; margin-top:70px">

  <section class="reg_form_container">
    <header>Registration Form</header>

    <form method="post" action="<?php echo URLROOT; ?>pages/joinreg" class="form" enctype="multipart/form-data">

      <div class="input-box">
        <label>Full Name<span style="color:red"><sup>*</sup></span></label>
        <input type="text" placeholder="Enter full name" name="name" value="<?php echo $data['name']; ?>" />
        <span class="invalid-feedback">
          <?php echo $data['name_err']; ?>
        </span>
      </div>

      <div class="input-box">
        <label>Email Address<span style="color:red"><sup>*</sup></label>
        <input type="text" placeholder="Enter email address" name="email" value="<?php echo $data['email']; ?>" />
        <span class="invalid-feedback">
          <?php echo $data['email_err']; ?>
        </span>
      </div>
      <div class="input-box">
        <label>NIC<span style="color:red"><sup>*</sup></label>
        <input type="text" placeholder="Enter NIC" name="nic" value="<?php echo $data['nic']; ?>" />
        <span class="invalid-feedback">
          <?php echo $data['nic_err']; ?>
        </span>
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number<span style="color:red"><sup>*</sup></label>
          <input type="number" placeholder="Enter phone number" name="contact" value="<?php echo $data['phone']; ?>" />
          <span class="invalid-feedback">
            <?php echo $data['phone_err']; ?>
          </span>
        </div>
        <div class="input-box">
          <label>Birth Date<span style="color:red"><sup>*</sup></label>
          <input type="date" placeholder="Enter birth date" name="bday" value="<?php echo $data['bday']; ?>" />
          <span class="invalid-feedback">
            <?php echo $data['bday_err']; ?>
          </span>
        </div>
      </div>

      <div class="gender-box">
        <h3>Gender<span style="color:red"><sup>*</sup></h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" value="male" />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" value="female" />
            <label for="check-female">Female</label>
          </div>
        </div>
      </div>

      <div class="input-box address">
        <label>Address<span style="color:red"><sup>*</sup></label>
        <input type="text" placeholder="Enter address" name="address" value="<?php echo $data['address']; ?>" />
        <span class="invalid-feedback">
          <?php echo $data['address_err']; ?>
        </span>
      </div>

      <div class="input-box address">
        <label>Business Details<span style="color:red"><sup>*</sup></label>
        <input type="text" name="bname" placeholder="Enter your Business name" value="<?php echo $data['bname']; ?>" />

        <span class="invalid-feedback">
          <?php echo $data['bname_err']; ?>
        </span>
        <div class="column">
          <div class="select-box">
            <select name="stype">
              <option value="" hidden>Select Service Type</option>
              <option value="Event Planner">Event Planner</option>
              <option value="Photographer">Photographer</option>
              <option value="Videographer">Videographer</option>
              <option value="Decorations">Decorations</option>
              <option value="Cake Service">Cake Service</option>
              <option value="Reception hall">Reception hall</option>
              <option value="Catering Service">Catering Service</option>
            </select>
          </div>
          <input type="number" name="bno" placeholder="Enter Business Registration Number"
            value="<?php echo $data['bno']; ?>" />
          <span class="invalid-feedback">
            <?php echo $data['bno_err']; ?>
          </span>
        </div>
        <input type="text" name="baddress" placeholder="Enter Business place address"
          value="<?php echo $data['baddress']; ?>" />
        <span class="invalid-feedback">
          <?php echo $data['baddress_err']; ?>
        </span>
      </div>

      <div class="input-box address">
        <label>Upload proof of documents of your business (Certification of Incorporation of a Private Company)<span
            style="color:red"><sup>*</sup> </label>
      </div>

      <input type="file" id="myFile" name="proof" style="display:none">
      <span class="invalid-feedback">
        <?php echo $data['file_err']; ?>
      </span>
      <label class="upload_btn" for="myFile">Choose File</label>


      <div class="column">
        <div class="input-box">
          <label>Password<span style="color:red"><sup>*</sup></label>
          <input type="password" placeholder="Enter password" name="password"
            value="<?php echo $data['password']; ?>" />
          <span class="invalid-feedback">
            <?php echo $data['password_err']; ?>
          </span>
        </div>
        <div class="input-box">
          <label>Confirm Password<span style="color:red"><sup>*</sup></label>
          <input type="password" name="confirm_password" placeholder="Re-enter Password"
            value="<?php echo $data['confirm_password']; ?>" />

          <span class="invalid-feedback">
            <?php echo $data['confirm_password_err']; ?>
          </span>
        </div>
      </div>

      <button class="btn">Submit</button>

    </form>

  </section>

</div>

</body>

</html>