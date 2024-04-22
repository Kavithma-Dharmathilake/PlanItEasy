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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   


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
                <a href="<?php echo URLROOT; ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        <!-- Content start here -->
        <div>
          

            <!-- The General Detail Form -->

            <div class="gen-detail">

                <form action="<?php echo URLROOT; ?>customers/newevent " method="post">
                    <div>
                        <h1>
                            General Details
                        </h1>
                    </div>
                    <div style="display:flex;">
                        <div style="width:20rem; margin-left:2rem">


                            <p class="form-text">Event Type</p>
                            <div class="input-field">
                                <select name="type" id="type">
                                    <option name="eventType" value=""> </option>
                                    <option name="eventType" value="wedding"> Wedding (only)</option>
                                    <option name="eventType" value="wedding_homecoming"> Wedding and Homecoming</option>
                                    <option name="eventType" value="engagement"> Engagement</option>
                                    <option name="eventType" value="bday-kid"> Birthday(kids)</option>
                                    <option name="eventType" value="bday-adult">Birthday(Adult)</option>
                                    <option name="eventType" value="coporate">Coporate Event</option>
                                    <option name="eventType" value="christmas">Christmas Party</option>
                                    <option name="eventType" value="new-year">New Year Eve</option>
                                    <option name="eventType" value="anniversery">Anniversery</option>
                                </select>
                            </div>

                            <p class="form-text" style="margin-top:2rem;">Estimated Budegt(Optional)</p>
                            <div style="display:flex;">
                                <div>Min<br />
                                    <div class="input-field2">
                                        <input type="number" name="minbudget">
                                    </div>
                                </div>
                                <div>Max
                                    <div class="input-field2">
                                        <input type="number" name="maxbudget">
                                    </div>
                                </div>
                            </div>
                            <p class="form-text" style="margin-top:2rem;">Location of Venue</p>
                            <div class="input-field">
                                <input type="text" name="location" required>

                            </div>





                        </div>
                        <div style="width:20rem; margin-left:2rem">
                            <p class="form-text">Event Date</p>
                            <div class="input-field">
                                <input type="date" name="date" required>

                            </div>
                            <p class="form-text" style="margin-top:2rem;">Event Duration</p>
                            <div style="display:flex;">
                                <div>Start Time<br />
                                    <div class="input-field2">
                                        <input type="time" name="start">
                                    </div>
                                </div>
                                <div>End Time
                                    <div class="input-field2">
                                        <input type="time" name="end">
                                    </div>
                                </div>
                            </div>
                            <p class="form-text" style="margin-top:2rem;">Guest Count</p>
                            <div class="input-field">
                                <input type="number" name="count" required>

                            </div>

                        </div>
                    </div>
                    <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Event Theme</p>
                    <div class="input-field" style="margin-left:2rem;">
                        <textarea name="theme" id="theme" cols="90" rows="5"></textarea>

                    </div>
                    <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit">
                </form>
            </div>





        </div>


</body>

</html>
