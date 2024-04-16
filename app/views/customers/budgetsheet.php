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

                <a href="<?php echo URLROOT ?>eventplanners/eventRequest">
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
                <a href="<?php echo URLROOT ?>eventplanners/budget" class="active">
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

        <main>


            <!-- Content start here -->
            <div>



                <!-- Heading and search bar -->
                <div style="display:flex">

                    <div class="planner-title">
                        <!-- <h1>Create Budget</h1> -->


                    </div>


                </div>

                <!-- Event Request Table -->
                <div style="display:flex; flex-direction:row">
                    <div style="width:600px;margin:20px;">

                        <form action="#" method="post">
                            <div class="form-add-package">
                                <div class="form-wrapper">
                                    <div class="form-heading">
                                        <h2 style="padding: 20px;">Budget Plan</h2>
                                    </div>

                                    <div class="form-content">

                                        <div class="event-details" style="width:600px;">
                                            <p style="text-align:center">General details</p>

                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Event Type </div>
                                                <div class="req-data" style="width:50%"><?php echo $data['request']->event_type ?></div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Event Theme </div>
                                                <div class="req-data" style="width:50%"><?php echo $data['request']->theme ?></div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Tenative date </div>
                                                <div class="req-data" style="width:50%"><?php echo $data['request']->date ?></div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Budget </div>
                                                <div class="req-data" style="width:50%">LKR. <?php echo $data['request']->minbudget ?> - LKR. <?php echo $data['request']->maxbudget ?></div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Guest Count </div>
                                                <div class="req-data" style="width:50%"><?php echo $data['request']->guest_count ?></div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Time</div>
                                                <div class="req-data" style="width:50%"><?php echo $data['request']->starttime ?> - <?php echo $data['request']->endtime ?></div>
                                            </div>
                                        </div>
                                        <?php $count = 0 ?>
                                        <?php if (isset($data['result'])) { ?>
                                            <?php foreach ($data['result'] as $r) : ?>



                                                <div class="event-details" style="width:600px;height:350px;">
                                                    <p style="text-align:center"><?php echo $r->stype ?></p>
                                                    <form action="<?php echo URLROOT ?>customers/budgetsheet/<?php echo $data['bid'] . '/' . $data['eventid'] ?>" method="POST">
                                                        <input type="submit" name="delete" value="Delete">

                                                    </form>
                                                    <div class="input-box">
                                                        <label>Supplier Name</label><br />
                                                        <input type="text" value="<?php echo $r->bname ?>" name="name" disabled>
                                                        <label>Charges</label><br />
                                                        <input type="text" value="<?php echo $r->r_price ?>" name="name" disabled>
                                                        <?php $count = $count + $r->r_price ?>

                                                    </div>


                                                </div>


                                            <?php endforeach; ?>
                                        <?php } ?>

                                        <div class="input-box">

                                            <label>Total Charges</label><br />
                                            <input type="number" value="<?php echo $count ?>" name="total" disabled>

                                            <!-- warning message -->
                                            <?php
                                            if ($count > $data['request']->maxbudget) { ?>
                                                <span style="color:red;">Budget Exceeded</span>
                                            <?php } ?>
                                        </div>

                                        <div class="input-box">
                                            <!-- <input type="Submit" value="Create Budget" class="input-submit"> -->

                                            <a href="<?php echo URLROOT ?>customers/updateBudget/<?php echo $data['bid'] . '/' . $data['eventid'] . '/' . $count ?>">Create budget</a>

                                        </div>





                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>

                    <div style="margin:30px;width:400px; margin-left:110px;">
                        <div class="event-request" style="margin-top:60px">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['quote'] as $q) : ?>
                                        <tr>
                                            <td><?php echo $q->stype ?></td>
                                            <td><?php echo $q->bname ?></td>
                                            <td><?php echo $q->r_price ?>
                                            <td>
                                            <td><a href="<?php echo URLROOT ?>customers/addItem/<?php echo $q->eid . '/' . $data['bid'] . '/' . $q->id ?>/"><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></a></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



            </div>

</body>

</html>