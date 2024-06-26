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
                <a href="<?php echo URLROOT; ?>eventplanners" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/packages">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Packages</h3>
                </a>
                <a href="<?php echo URLROOT ?>eventplanners/portfolio">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Portfolio</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/eventRequest">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Event Requests</h3>
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
                <a href="<?php echo URLROOT ?>users/logout">
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
                    <h1>Your Budgets</h1>


                </div>


            </div>

            <!-- Event Request Table -->



            <div class="event-request" style="margin-top:60px">
                <div style="display:flex;">
                    <form action="<?php echo URLROOT ?>eventplanners/budget/<?php echo $data['eventid'] ?>" method="POST">
                        <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit" value="Create Budget">
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
                                    <a href="<?php echo URLROOT ?>eventplanners/budgetsheet/<?php echo $q->id ?>/<?php echo $data['eventid'] ?> ">
                                        View
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