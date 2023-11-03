<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/profile.css">


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
                <a href="<?php echo URLROOT; ?>eventplanners">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/packages">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/eventRequest">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Event Requests</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/quoteReq">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Quoatation Requests</h3>
                </a>
                <a href="<?php echo URLROOT ?>eventplanners/supplierReq">
                    <span class="material-icons-sharp">
                        request_quote
                    </span>
                    <h3>Supplier Quotations</h3>
                </a>
                <a href="<?php echo URLROOT ?>eventplanners/budget">
                    <span class="material-icons-sharp">
                        paid
                    </span>
                    <h3>Budget Plans</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/calendar">
                    <span class="material-icons-sharp">
                        calendar_month
                    </span>
                    <h3>Calender</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/profile" class="active">
                    <span class="material-icons-sharp">
                        account_box
                    </span>
                    <h3>Profile</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/inquiry">
                    <span class="material-icons-sharp">
                        info
                    </span>
                    <h3>Inquiry</h3>
                </a>
                <a href="<?php echo URLROOT ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        <!-- Content start here -->
        <div>
            <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b>Sunimal</b></p>
                    <small class="text-muted">Eventplanner</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>


            <div class="profile-icon" style="display:flex; width:500px">
                <div>
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                    <i class="fa fa-plus-circle" aria-hidden="true"><input type="file" accept=".jpg, .jpeg, .png"
                            style="display: none;" /></i>
                </div>
                <div>

                    <p>Sunimal thennakoon</p>
                    <h3>Havlock, Colombo</h3>

                </div>
            </div>
            <div class="profile-content">
                <h2>Personal Information  <a href='#'><i class="fa fa-edit" aria-hidden="true"></i></a></h2>
                <br /><br />
               

                <div style="display:flex">
                    <div  >

                        <label style="display:flex">Name</label>
                        <input style="display:flex" type="text" placeholder="kavithma" required />
                        <label style="display:flex">Email Address</label>
                        <input style="display:flex" type="email" placeholder="kavithma@gmail.com" required />
                        <label style="display:flex">Address</label>
                        <input style="display:flex" type="text" placeholder="Enter full name" required />


                    </div>
                    <div style="margin-left:50px">
                        <label style="display:flex">Username</label>
                        <input style="display:flex" type="text" placeholder="Kavithma" required />
                        <label style="display:flex">Phone Number</label>
                        <input style="display:flex" type="phone" placeholder="07025631452" required />
                        <label style="display:flex">password</label>
                        <input style="display:flex" type="password" placeholder="******" required />
                    </div>
                </div>

                <br/><br /><br/><h2>Business Information <a href='#'><i class="fa fa-edit" aria-hidden="true"></i></a></h2>
                <br/><br />
                <div style="display:flex">
                    <div style="flex-direction:column;">

                        <label style="display:flex">Business Name</label>
                        <input style="display:flex" type="text" placeholder="Blissful stories" required />
                        <label style="display:flex"> Service Type</label>
                        <input style="display:flex" type="text" placeholder="Event Planning" required />
                        <label style="display:flex">Service Description</label>
                        <input style="display:flex" type="text" placeholder="Evenet planning" required />


                    </div>
                    <div style="margin-left:50px">
                        <label style="display:flex">Business Registration No</label>
                        <input style="display:flex" type="text" placeholder="12313131" required />
                        <label style="display:flex">Service Location</label>
                        <input style="display:flex" type="txt" placeholder="Colobo" required />
                        <label style="display:flex">password</label>
                        <input style="display:flex" type="password" placeholder="" required />
                    </div>
                </div>
    


            </div>





</body>

</html>