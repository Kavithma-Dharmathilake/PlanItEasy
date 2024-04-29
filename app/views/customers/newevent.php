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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/event-form.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>

<body>

    <div class="dash-container">
        <aside>
        <div class="top">
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
                    <span class="material-icons-sharp" class="active">grid_view</span>
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
                                <select name="type" id="type" style="display:block">
                                    <option name="eventType" value=""> </option>
                                    <option name="eventType" value="Wedding" <?php if(isset($data['type'])) if($data['type'] == 'Wedding') echo 'Selected' ?> > Wedding (only)</option>
                                    <option name="eventType" value="Homecoming"  <?php if(isset($data['type'])) if($data['type'] == 'Homecoming') echo 'Selected' ?>> Homecoming</option>
                                    <option name="eventType" value="Engagement" <?php if(isset($data['type'])) if($data['type'] == 'Engagement') echo 'Selected' ?>> Engagement</option>
                                    <option name="eventType" value="Birthday(Child)" <?php if(isset($data['type'])) if($data['type'] == 'Birthday(Child') echo 'Selected' ?>> Birthday(kids)</option>
                                    <option name="eventType" value="Birthday(Adult)" <?php if(isset($data['type'])) if($data['type'] == 'Birthday(Adult') echo 'Selected' ?>>Birthday(Adult)</option>
                                    <option name="eventType" value="Coporate" <?php if(isset($data['type'])) if($data['type'] == 'Coporate') echo 'Selected' ?>>Coporate Event</option>
                                    <option name="eventType" value="Christmas" <?php if(isset($data['type'])) if($data['type'] == 'Christmas') echo 'Selected' ?>>Christmas Party</option>
                                    <option name="eventType" value="New Year" <?php if(isset($data['type'])) if($data['type'] == 'New Year') echo 'Selected' ?>>New Year Eve</option>
                                    <option name="eventType" value="Anniversery" <?php if(isset($data['type'])) if($data['type'] == 'Anniversery') echo 'Selected' ?>>Anniversery</option>
                                </select>
                            </div>

                            <p class="form-text" style="margin-top:2rem;">Estimated Budegt(Optional)</p>
                            <div style="display:flex;">
                                <div>Min<br />
                                    <div class="input-field2">
                                        <input type="number" name="minbudget" value="<?php if(isset($data['min']))echo $data['min'] ?>" required min=0.0> 
                                    </div>
                                </div>
                                <div>Max
                                    <div class="input-field2">
                                        <input type="number" name="maxbudget" value="<?php if(isset($data['max']))echo $data['max'] ?>"  required min=0.0 >
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($data['budget_err'])){
                                echo '<p style="color:red">'.$data['budget_err'].'</p>';
                            } ?>
                            <p class="form-text" style="margin-top:2rem;">Location of Venue</p>
                            <div class="input-field">
                                <input type="text" name="location" required value="<?php if(isset($data['loc']))echo $data['loc'] ?>">

                            </div>





                        </div>
                        <div style="width:20rem; margin-left:2rem">
                            <p class="form-text">Event Date</p>
                            <div class="input-field">
                                <input type="date" name="date" required min=<?php echo date('Y-m-d');?> value="<?php if(isset($data['date']))echo $data['date'] ?>" >

                            </div>
                            <p class="form-text" style="margin-top:2rem;">Event Duration</p>
                            <div style="display:flex;">
                                <div>Start Time<br />
                                    <div class="input-field2">
                                        <input type="time" name="start" value="<?php if(isset($data['start']))echo $data['start'] ?>"  required>
                                    </div>
                                </div>
                                <div>End Time
                                    <div class="input-field2">
                                        <input type="time" name="end" required value="<?php if(isset($data['end']))echo $data['end'] ?>" >
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($data['time_err'])){
                                echo '<p style="color:red">'.$data['time_err'].'</p>';
                            } ?>
                            <p class="form-text" style="margin-top:2rem;">Guest Count</p>
                            <div class="input-field">
                                <input type="number" name="count" required value="<?php if(isset($data['count']))echo $data['count'] ?>" min=0>

                            </div>
                          

                        </div>
                    </div>
                    <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Event Theme</p>
                    <div class="input-field" style="margin-left:2rem;">
                        <textarea name="theme" id="theme" cols="90" rows="5">
                        <?php if(isset($data['count']))echo $data['theme'] ?>
                        </textarea>

                    </div>
                    <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit">
                </form>
            </div>





        </div>


</body>

</html>