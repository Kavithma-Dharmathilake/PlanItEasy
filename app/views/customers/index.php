<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
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
           
            <div class="sidebar">
            <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp" class="active">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp">man</span>
                    <h3>Create New Event</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/ongoing">
                    <span class="material-icons-sharp">calendar_today</span>
                    <h3>Ongoing Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/complete" >
                    <span class="material-icons-sharp">event_available</span>
                    <h3>Completed Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/viewquote">
                    <span class="material-icons-sharp"> note_add</span>
                    <h3>supplier quotation</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile">
                    <span class="material-icons-sharp">person</span>
                    <h3>profile</h3>
                </a>
                <a href="<?php echo URLROOT; ?>user/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>


        </aside>



        <!-- Content start here -->
        <div>
            <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b>Pawani</b></p>
                    <small class="text-muted">Customer</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>

            <!-- Heading and search bar -->


            <div class="planner-title" style="padding-bottom:50px;">
                <h1>Dashboard</h1>
            </div>
            <main>



                <div class="insights">


                    <div class="users">
                        <span class="material-icons-sharp">man</span>
                        <div class="middle">
                            <div class="left">

                                <h1><a href="<?php echo URLROOT ?>pages/eventplanners">Select The Event Planner</a></h1>
                            </div>

                        </div>

                    </div>


                    <div class="eventplanners">
                        <span class="material-icons-sharp">groups</span>
                        <div class="middle">
                            <div class="left">

                                <h1><a href="<?php echo URLROOT ?>pages/suppliers">Select Suppliers</a></h1>
                            </div>

                        </div>
                    </div>


                </div>



        </div>
        </main>
    </div>



    </div>

</body>

</html>