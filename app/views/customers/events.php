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

        <div class="right">

            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Your Events</h1>


                </div>


            </div>

            <!-- Event Request Table -->


            <a href="<?php echo URLROOT; ?>customers/newevent">
                <button style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem">Add New Event</button>
            </a>
            <div class="event-request" style="margin-top:20px">

                <table>
                    <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event type</th>
                            <th>Tentative Date</th>
                            <th>Event Status</th>
                            <th>Action </th>
                            <th>More </th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['events'] as $event) : ?>

                            <tr>
                                <td><?php echo $event->id; ?></td>
                                <td> <?php echo $event->event_type; ?> </td>
                                <td><?php echo $event->date; ?> </td>
                                <td><?php echo $event->event_status; ?> </td>
                                <td><a href="#">
                                        Edit | Delete
                                    </a></td>
                                <td><a href="<?php echo URLROOT ?>customers/oneevent/<?php echo $event->id; ?>">
                                        <span class="material-icons-sharp">

                                            expand_circle_down

                                        </span>
                                    </a></td>


                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>





        </div>





</body>

</html>