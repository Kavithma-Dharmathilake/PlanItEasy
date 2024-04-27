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
                <a href="<?php echo URLROOT; ?>eventplanners">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/packages">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/eventRequest" class="active">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Event Requests</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/quoteReq">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Quoatation Requests</h3>
                </a>
                <a href="<?php echo URLROOT ?>eventplanners/supplierReq">
                    <span class="material-icons-sharp">
                        request_quote
                    </span>
                    <h3>Supplier Quotations</h3>
                </a>
                <a href="<?php echo URLROOT ?>eventplanners/budget">
                    <span class="material-icons-sharp">
                        paid
                    </span>
                    <h3>Budget Plans</h3>
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


            <!-- The General Detail Form -->

            <div class="gen-detail">

                <form action="<?php echo URLROOT; ?>eventplanners/sendquote/<?php echo $data['supplier']->id ?>/<?php echo $data['request']->id ?>" method="post">
                    <div>
                        <h1>
                            Request Quote - <?php echo $data['supplier']->bname ?>
                        </h1>
                    </div>
                    <div style="display:flex;">
                        <div style="width:20rem; margin-left:2rem">


                            <p class="form-text">Supplier Name</p>
                            <div class="input-field">
                                <input type="text" name="count" value="<?php echo $data['supplier']->bname ?>" readonly>
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



                            <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Additional Services</p>
                            <input type="checkbox" id="poruwa" name="poruwa">
                            <label for="prouwa" style="font-size: 15px;">Poruwa</label><br />
                            <input type="checkbox" id="Setee Back" name="Setee-Back">
                            <label for="Setee Back" style="font-size: 15px;">Setee Back</label><br />
                            <input type="checkbox" id="Table Deco" name="Table-Deco">
                            <label for="Table Deco" style="font-size: 15px;">Head Table Deco/ Table Deco</label><br />
                            <input type="checkbox" id="Bouquets" name="Bouquets">
                            <label for="Bouquets" style="font-size: 15px;">Bouquets</label><br />
                            <input type="checkbox" id="Entrance Deco" name="Entrance-deco">
                            <label for="Entrance Deco" style="font-size: 15px;">Entrance Deco</label><br />
                            <input type="checkbox" id="Seating arrangements" name="Seating-deco">
                            <label for="Seating arrangements" style="font-size: 15px;">Seating arrangements</label><br />
                            <input type="checkbox" id="Lighting arrangements" name="Lighting-deco">
                            <label for="Lighting arrangements" style="font-size: 15px;">Lighting arrangements</label><br />
                            <input type="checkbox" id="Ceiling Deco" name="Ceiling-deco">
                            <label for="Ceiling Deco" style="font-size: 15px;">Ceiling Deco</label><br />



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
                                        <input type="time" name="start" value="<?php echo $data['request']->starttime ?>">
                                    </div>
                                </div>
                                <div>End Time
                                    <div class="input-field2">
                                        <input type="time" name="end" value="<?php echo $data['request']->endtime ?>" >
                                    </div>
                                </div>
                            </div>


                            <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Flowers</p>
                            <input type="checkbox" id="Natural" name="Natural">
                            <label for="prouwa" style="font-size: 15px;">Natural</label><br />
                            <input type="checkbox" id="Artificial" name="Artifical">
                            <label for="Setee Back" style="font-size: 15px;">Artificial</label><br />



                        </div>
                    </div>
                    <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Additional Remarks for the <?php echo $data['supplier']->bname ?></p>
                    <div class="input-field" style="margin-left:2rem;">
                        <textarea name="remark" id="theme" cols="80" rows="5"></textarea>

                    </div>
                    <input style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem" type="submit">
                </form>
            </div>





        </div>


</body>

</html>