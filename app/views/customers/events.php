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

    <style>

.allButton {
  background-color: black;
  color: white;
  border: none; 
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

/* Hover state */
.allButton:hover {
  background-color: darkyellow;
}

/* Active state (when clicked) */
.allButton:active {
  background-color: grey;
  color: black;
}


.pendingButton {
  background-color: #e69500;
  color: white;
  border: none;
  border-radius: 20px;   
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

/* Hover state */
.pendingButton:hover {
  background-color: darkyellow;
}

/* Active state (when clicked) */
.pendingButton:active {
  background-color: white;
  color: #e69500;
}

.acceptedButton {
  background-color: blue;
  color: white;
  border: none;
  border-radius: 20px;   
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

/* Hover state */
.acceptedButton:hover {
  background-color: darkblue;
}

/* Active state (when clicked) */
.acceptedButton:active {
  background-color: white;
  color: blue;
}

.declinedButton {
  background-color: #CE2029;
  color: white;
  border: none;
  border-radius: 20px;   
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

/* Hover state */
.declinedButton:hover {
  background-color: darkred;
}

/* Active state (when clicked) */
.declinedButton:active {
  background-color: white;
  color: #CE2029;
}

.completedButton {
  background-color: green;
  color: white;
  border: none;
  border-radius: 20px;   
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

/* Hover state */
.completedButton:hover {
  background-color: darkgreen;
}

/* Active state (when clicked) */
.completedButton:active {
  background-color: white;
  color: green;
}
    </style>


</head>

<body>
    <div class="dash-container">
        <aside>

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
                <!-- <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a> -->
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

            <div style="margin-top:3rem;"> 
                <a href="<?php echo URLROOT ?>customers/events"><button type="submit" class="allButton">All</button></a>
                <a href="<?php echo URLROOT ?>customers/bookedEvents"><button type="submit" class="pendingButton">Booked</button></a>
                <a href="<?php echo URLROOT ?>customers/ongoingEvents"><button type="submit" class="acceptedButton">Ongoing</button></a>
                <a href="<?php echo URLROOT ?>customers/canceledEvents"><button type="submit" class="declinedButton">Canceled</button></a>
                <a href="<?php echo URLROOT ?>customers/completedEvents"><button type="submit" class="completedButton">Completed</button></a>
            </div>

                <?php var_dump($_SESSION['user_id']);?> 

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
                                <td style="display:flex;padding-top:0.5rem">
                                    <a id="editEvent" style="padding-left:3rem" href="<?php ?>">Edit</a>
                                    <a id="deleteEvent" style="padding-right:3rem" href="#"> Delete</a>
                                </td>
                                <td><a  href="<?php echo URLROOT ?>customers/oneevent/<?php echo $event->id; ?>">
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