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

    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/event-form.css">

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
            </div>
        </aside>


        <!-- Content start here -->
        <div>
            <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b>Sunimal</b></p>
                    <small class="text-muted"></small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>


            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Your Suppliers</h1>
                    <h3>Easily organize all of your vendor planning so far (plus contact, book and more!).</h3>
                </div>


            </div>

            <!-- Vendor types -->
            <div class="vendor-card">
                <div style="display: flex;">
                    <div style="background-color:#03396c;border-radius:30rem;width:4rem;height:4rem; padding:1rem">

                        <span class="material-icons-sharp" style="font-size: 2rem;">
                            location_city
                        </span>
                    </div>
                    <p>Your <?php echo $data['request']->event_type ?> venue</p>
                    <a href="<?php echo URLROOT ?>customers/supplierport/<?php echo $data['request']->id ?>/photo" style="margin-left:16rem;"><Button>Search Suppliers</Button></a>
                </div>
            </div>

            <div class="vendor-card">
                <div style="display: flex;">
                    <div style="background-color:#03396c;border-radius:30rem;width:4rem;height:4rem; padding:1rem">

                        <span class="material-icons-sharp" style="font-size: 2rem;">
                            location_city
                        </span>
                    </div>
                    <p>Your   <?php echo $data['request']->event_type ?> photographer</p>
                    <a href="#" style="margin-left:10rem;"><Button>Search Suppliers</Button></a>
                </div>
            </div>

            <div class="vendor-card">
                <div style="display: flex;">
                    <div style="background-color:#03396c;border-radius:30rem;width:4rem;height:4rem; padding:1rem">

                        <span class="material-icons-sharp" style="font-size: 2rem;">
                            location_city
                        </span>
                    </div>
                    <p>Your <?php echo $data['request']->event_type ?> Catering</p>
                    <a href="#" style="margin-left:14rem;"><Button>Search Suppliers</Button></a>
                </div>
            </div>

            <div class="vendor-card">
                <div style="display: flex;">
                    <div style="background-color:#03396c;border-radius:30rem;width:4rem;height:4rem; padding:1rem">

                        <span class="material-icons-sharp" style="font-size: 2rem;">
                            location_city
                        </span>
                    </div>
                    <p>Your <?php echo $data['request']->event_type ?> decoration</p>
                    <a href="#" style="margin-left:13rem;"><Button>Search Suppliers</Button></a>
                </div>
            </div>




        </div>


</body>

</html>

<?php





?>