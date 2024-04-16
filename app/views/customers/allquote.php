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
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            /* margin: 15% auto;
            15% from the top and centered */
            margin-left: 25%;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


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




            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Your Quotations</h1>


                </div>


            </div>

            <!-- Event Request Table -->



            <div class="event-request" style="margin-top:60px">
                Done with quotations? 
                <button style="padding:0.5rem;margin:0.5rem; background-color:#41f1b6;color:white; border-radius:0.7rem"><a href="<?php echo URLROOT ?>customers/budget/<?php echo $data['eventid']; ?>">Create Budget </a></button>
                <table style="width:1000px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Supplier</th>
                            <th>Sent Date</th>
                            <th>Requested Price</th>
                            <th>Final Price</th>
                            <th>Status</th>
                            <th>View More</th>
                            <th>Message with Supplier</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['quote'] as $q) : ?>
                            <tr>

                                <td><?php echo $q->id; ?></td>
                                <td><?php echo  $q->bname ?></td>
                                <td> <?php echo $q->send_date; ?>
                                <td>LKR. <?php echo $q->r_price; ?></td>
                                <td>LKR. <?php echo $q->price; ?>
                                <td> <?php echo $q->status; ?></td>
                                <a href="">
                                    <td id="myBtn"> View

                                        <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">

                                                <div class="search-quoate">

                                                    <div style="display:flex; flex-direction:row">
                                                        <div class="event-details" style="width:700px;">
                                                            <p style="text-align:center">Requested Quotation</p>

                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px; ">
                                                                <div class="req-title" style="width:50%">Supplier</div>
                                                                <div class="req-data" style="width:50%"><?php echo $q->bname  ?></div>
                                                            </div>

                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Package</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->package  ?> - (LKR. <?php echo  $q->price ?>)</div>
                                                            </div>
                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Sent date</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->send_date  ?> </div>
                                                            </div>


                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Your Remarks</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->remarks  ?></div>
                                                            </div>
                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Supplier Remarks</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->s_remark  ?></div>
                                                            </div>
                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Service Duration</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->stime  ?> to <?php echo  $q->etime  ?> </div>
                                                            </div>
                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Received date</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->received_date  ?> </div>
                                                            </div>
                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Additional Services</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->additional_services ?> </div>
                                                            </div>
                                                            <?php if ($q->stype == 'decoration') : ?>
                                                                <!-- Display types of flowers for decoration -->
                                                                <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                    <div class="req-title" style="width:50%">Types of Flowers</div>
                                                                    <div class="req-data" style="width:50%"><?php echo $q->flowers; ?></div>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if ($q->stype == 'catering') : ?>

                                                                <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                    <div class="req-title" style="width:50%">Time </div>
                                                                    <div class="req-data" style="width:50%"><?php echo $q->time; ?></div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                                                                <div class="req-title" style="width:50%">Quotation Status</div>
                                                                <div class="req-data" style="width:50%"><?php echo  $q->q_status  ?></div>
                                                            </div>

                                                            <?php
                                                            $disabled = ($q->q_status !== 'Pending') ? 'disabled' : '';

                                                            ?>

                                                        </div>

                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </a>

                                <td> Message</td>
                              

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>



        </div>


</body>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


</html>