<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/profile.css">


</head>

<body>
    <div class="dash-container">
        <aside>

            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp" class="active">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/events">
                    <span class="material-icons-sharp">man</span>
                    <h3>Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile" class="active">
                    <span class="material-icons-sharp">person</span>
                    <h3>profile</h3>
                </a>
                <a href="<?php echo URLROOT; ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>


        </aside>

       

        <!-- Content start here -->
        <div>
            <!-- <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b><?php echo $_SESSION['user_name']?></b></p>
                    <small class="text-muted"><?php echo $_SESSION['user_role'] ?></small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div> -->


            <div class="profile-icon" style="display:flex; width:500px">
                <div>
                    <img src="<?php echo URLROOT ?>public/images/user.svg">
                    <div class="edit-profile">
                    </div>
                </div>
                <div>

                    <p><?php echo $_SESSION['user_name']?></p>
                    <h3><?php echo $_SESSION['user_address']?></h3>

                </div>
            </div>
            <div class="profile-content">
                <h2>Personal Information <a href='#'><i class="fa fa-edit" aria-hidden="true"></i></a></h2>
                <br /><br />


                <div style="display:flex">
                    <div>

                        <label style="display:flex">Name</label>
                        <input style="display:flex" type="text" placeholder="<?php echo $_SESSION['user_name']?>" required />
                        <label style="display:flex">Email Address</label>
                        <input style="display:flex" type="email" placeholder="<?php echo $_SESSION['user_email']?>" required />
                        <label style="display:flex">Address</label>
                        <input style="display:flex" type="text" placeholder="<?php echo $_SESSION['user_address']?>" required />


                    </div>
                    <div style="margin-left:50px">
                        <label style="display:flex">Username</label>
                        <input style="display:flex" type="text" placeholder="<?php echo $_SESSION['user_name']?>" required />
                        <label style="display:flex">Phone Number</label>
                        <input style="display:flex" type="phone" placeholder="<?php echo $_SESSION['user_contact']?>" required />
                        <label style="display:flex">password</label>
                        <input style="display:flex" type="password" placeholder="********" required />
                    </div>
                </div>




            </div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>




</body>

</html>