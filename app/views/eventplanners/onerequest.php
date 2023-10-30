<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event request</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">


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

                <a href="<?php echo URLROOT ?>eventplanners/eventRequest" class="active">
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

                <a href="<?php echo URLROOT ?>eventplanners/profile">
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
                <a href="<?php echo URLROOT ?>">
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



            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Event Request</h1>
                </div>


            </div>
            <div style="display:flex; margin-top:40px">
                <div class="event-details">
                    <p>Event details</p>

                    <div style="display:flex; margin-top:20px; margin-left:30px;">
                        <div class="req-title" style="width:50%">Event Type </div>
                        <div class="req-data" style="width:50%">Wedding</div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px;">
                        <div class="req-title" style="width:50%">Event Theme </div>
                        <div class="req-data" style="width:50%">Ocean</div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px;">
                        <div class="req-title" style="width:50%">Tenative date </div>
                        <div class="req-data" style="width:50%">2023/10/12</div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px;">
                        <div class="req-title" style="width:50%">Budget </div>
                        <div class="req-data" style="width:50%">100,000.00 LKR</div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px;">
                        <div class="req-title" style="width:50%">Guest Count </div>
                        <div class="req-data" style="width:50%">250</div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px;">
                        <div class="req-title" style="width:50%">Time</div>
                        <div class="req-data" style="width:50%">8.00 A.M. - 4.30 P.M.</div>
                    </div>
                </div>
                <div class="search-quoate">
                    sss dcdc
                </div>

            </div>




        </div>


</body>

</html>