<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planiteasy</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
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


            <!-- The General Detail Form -->

            <div class="gen-detail">

                <form action="<?php echo URLROOT; ?>customers/sendquote/<?php echo $data['supplier']->id ?>/<?php echo $data['request']->id ?>" method="post">
                    <div>
                        <h1>
                            Request Quote - <?php echo $data['supplier']->bname ?>
                        </h1>
                    </div>
                    <div style="display:flex;">
                        <div style="width:20rem; margin-left:2rem">


                            <p class="form-text">Supplier Name</p>
                            <div class="input-field">
                                <input type="text" name="count" value="Sri Malee GrandMeridian" readonly>
                            </div>
                            <p class="form-text" style="margin-top:3rem;">Package Type</p>
                            <div class="input-field">
                                <select name="type" id="type">
                                    <option name="packageType" value=""> </option>
                                    <option name="packageType" value="bronze">Bronze package</option>
                                    <option name="packageType" value="silver">Silver Package</option>
                                    <option name="packageType" value="gold"> Gold package</option>

                                </select>
                            </div>


                            <p class="form-text" style="margin-top:1rem;margin-right:2rem">Time</p>
                            <input type="checkbox" id="smokescreen" name="Lunch">
                            <label for="Lunch" style="font-size: 15px;">Lunch</label><br />
                            <input type="checkbox" id="Dinner" name="Dinner">
                            <label for="Dinner" style="font-size: 15px;">Dinner</label><br />
                            <input type="checkbox" id="Breakfast" name="Breakfast">
                            <label for="Breakfast" style="font-size: 15px;">Breakfast</label><br />




                        </div>
                        <div style="width:20rem; margin-left:2rem">
                            <p class="form-text">Event Date</p>
                            <div class="input-field">
                                <input type="date" name="date" value="2024-03-24" readonly>

                            </div>
                            <p class="form-text" style="margin-top:2rem;">Service Duration</p>
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
                            <p class="form-text" style="margin-top:1rem; margin-right:2rem">Additional Services</p>
                            <input type="checkbox" id="smokescreen" name="Severs">
                            <label for="Servers" style="font-size: 15px;">Servers</label><br />
                            <input type="checkbox" id="Packets" name="Packets">
                            <label for="Packets" style="font-size: 15px;">Packets</label><br />
                            <input type="checkbox" id="Delivery" name="Delivery">
                            <label for="Delivery" style="font-size: 15px;">Delivery</label><br />


                        </div>
                    </div>
                    <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Additional Remarks for the Sri Malee GrandMeridian</p>
                    <div class="input-field" style="margin-left:2rem;">
                        <textarea name="remark" id="theme" cols="80" rows="5"></textarea>

                    </div>
                    <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit">
                </form>
            </div>





        </div>


</body>

</html>