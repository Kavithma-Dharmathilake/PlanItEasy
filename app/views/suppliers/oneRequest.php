<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event request</title>
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
                <a href="<?php echo URLROOT ?>">
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
                    <small class="text-muted">Eventplanner</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>



            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Event Request ID #RQ<?php echo $data['request']->id ?> Quotations Request</h1>
                </div>


            </div>
            <div style="display:flex; margin-top:40px">
                <div>
                    <h2 style="text-align:center; margin-top:50px">General details</h2>
                    <div class="event-details">
                        <p style="text-align:center">Event details</p>

                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Event Type </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->event_type  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Event Theme </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->theme  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Tenative date </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->date  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Time</div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->starttime  ?> - <?php echo  $data['event']->endtime  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Location</div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->location  ?></div>
                        </div>
                    </div>
                    <div class="event-details">

                        <p style="text-align:center;">Customer Details</p>

                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Name </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['customer']->name  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Email </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['customer']->email  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Telephone </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['customer']->contact  ?></div>
                        </div>
                        <Button style="margin-left:70px;margin-top:25px;padding:10px; background-color:cornflowerblue;border-radius:15px;">Message With Customer</Button>

                    </div>
                </div>
                <div class="search-quoate">
                    <h2 style="text-align:center; margin-top:50px; margin-left:-330px;">Service Details</h2>
                    <div style="display:flex; flex-direction:row">
                        <div class="event-details" style="width:700px;">
                            <p style="text-align:center">Requested Quotation</p>



                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Package</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->package  ?> - (LKR. <?php echo  $data['request']->price ?>)</div>
                            </div>

                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Customer Remarks</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->remarks  ?></div>
                            </div>
                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Service Duration</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->stime  ?> to <?php echo  $data['request']->etime  ?> </div>
                            </div>
                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Additional Services</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->additional_services ?> </div>
                            </div>
                            <?php if ($data['request']->stype == 'decoration') : ?>
                                <!-- Display types of flowers for decoration -->
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Types of Flowers</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['request']->flowers; ?></div>
                                </div>
                            <?php endif; ?>

                            <?php if ($data['request']->stype == 'catering') : ?>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time </div>
                                    <div class="req-data" style="width:50%"><?php echo $data['request']->time; ?></div>
                                </div>
                            <?php endif; ?>
                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Quotation Status</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->q_status  ?></div>
                            </div>

                            <?php
                            $disabled = ($data['request']->q_status !== 'Pending') ? 'disabled' : '';

                            ?>
                            <form action="<?php echo URLROOT ?>suppliers/oneRequest/<?php echo $data['request']->id ?>" method="post">
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Final Charge</div>
                                    <div class="req-data" style="width:10%">
                                        <input type="number" value="<?php echo  $data['request']->r_price ?>" name="r_price" style="padding:7px;border-radius:5px;" <?php echo $disabled; ?>>
                                    </div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks for the Customer</div>
                                    <div class="req-data" style="width:10%">
                                        <textarea id="remark" cols="30" rows="5" name="remark" <?php echo $disabled; ?>>  <?php echo $data['request']->s_remark ?>  </textarea>
                                    </div>
                                </div>


                                <input name="accept" type="submit" value="Accept" style="margin-left:150px; padding:1rem" <?php echo $disabled; ?> />
                                <input name="decline" type="submit" style="margin-left:150px; padding:1rem" value="Decline" <?php echo $disabled; ?> />

                            </form>

                        </div>

                    </div>



                </div>
            </div>

        </div>




    </div>


</body>

</html>