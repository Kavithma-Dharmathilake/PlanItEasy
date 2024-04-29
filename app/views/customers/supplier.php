<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/customerdash.css">

</head>

<body>
    <div class="dash-container">
        <aside><div class="top">
                <div class="logo">
                    <img src="<?php echo URLROOT; ?>public/images/logo.jpg">
                    <h2>PlanItEasy</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/events" class="active">
                    <span class="material-icons-sharp">man</span>
                    <h3>Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT ?>customers/inquiry">
                    <span class="material-icons-sharp">info</span>
                    <h3>Inquiry</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile">
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



            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1 style="font-weight:600 ; font-size:3rem ; color:#03396c">Your Suppliers</h1>
                    <h2 style="margin-top: 1.5rem ; margin-bottom:1.5rem ; font-weight: 500; ">Easily organize all of your vendor planning so far</h2>
                </div>


            </div>

            <!-- Vendor types -->
            <div class="vendor-gallery">
                <div class="vendor-row">
                    <a href="<?php echo URLROOT ?>customers/eventplanner/<?php echo $data['request']->id; ?>">
                        <div class="vendor-long-tab">
                            <img src="<?php echo URLROOT ?>public/images/photography.jpg" alt="">
                            <p>EventPlanners</p>

                        </div>
                    </a>

                    <a href="<?php echo URLROOT ?>customers/photography">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/photography.jpg" alt="">
                            <p>Photography</p>

                        </div>
                    </a>
                    <a href="<?php echo URLROOT ?>customers/reception/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/reception.jpg" alt="">
                            <p>Reception</p>
                        </div>
                    </a>
                </div>
                <div class="vendor-row">
                    <a href="<?php echo URLROOT ?>customers/catering/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/catering1.jpg" alt="">
                            <p>Catering</p>
                        </div>
                    </a>
                    <a href="<?php echo URLROOT ?>customers/decorations/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/deco3.jpg" alt="">
                            <p>Decorations</p>

                        </div>
                    </a>


                    <a href="<?php echo URLROOT ?>customers/cake/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/cake1.jpg" alt="">
                            <p>Cake Services</p>
                        </div>
                    </a>
                    <a href="<?php echo URLROOT ?>customers/dancing/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/deco3.jpg" alt="">
                            <p>Dancing Crew</p>

                        </div>
                    </a>

                </div>
                <div class="vendor-row">
                  


                    <a href="<?php echo URLROOT ?>customers/music/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/band.webp" alt="">
                            <p>Music band</p>
                        </div>
                    </a>
                    <a href="<?php echo URLROOT ?>customers/dj/<?php echo $data['request']->id; ?>">
                        <div class="vendor-tab">
                            <img src="<?php echo URLROOT ?>public/images/dj.jpeg" alt="">
                            <p>DJ</p>
                        </div>
                    </a>

                </div>
            </div>




        </div>


</body>

</html>

<?php





?>