<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanItEasy</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <h1>Your Budgets</h1>


                </div>


            </div>

            <!-- Event Request Table -->



            <div class="event-request" style="margin-top:60px">
                <div style="display:flex;">
                    <form action="<?php echo URLROOT ?>customers/budget/<?php echo $data['eventid'] ?>" method="POST">
                        <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit" value="Budget by Price">
                    </form>
                    <form action="<?php echo URLROOT ?>customers/budget/<?php echo $data['eventid'] ?>" method="POST">
                        <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit" value="Budget by Ratings">
                    </form>
                    <form action="<?php echo URLROOT ?>customers/budget/<?php echo $data['eventid'] ?>" method="POST">
                        <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit" value="Budget from Scratch">
                    </form>

                </div>
                <table style="width:1000px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Payment Status</th>
                            <th>Final Price</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['budget'] as $q) : ?>

                            <tr>

                                <td><?php echo $q->id; ?></td>
                                <td> <?php echo $q->status; ?>
                                <td>LKR. <?php echo $q->price; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT ?>customers/payement/<?php echo $q->rid; ?>/<?php echo $q->id; ?>/<?php echo $q->price ?>">
                                        <?php
                                        if ( $q->status == 'Payment Complete') { 
                                            echo '';
                                         } else{
                                            echo 'Checkout';
                                         }
                                            ?>
                                        </a>
                                </td>


                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>



        </div>


</body>

</html>