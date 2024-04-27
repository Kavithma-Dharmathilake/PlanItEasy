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




            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1></h1>


                </div>


            </div>

            <!-- Event Request Table -->


            <a href="<?php echo URLROOT ?>eventplanners/onerequest/<?php echo $data['request']->id?>">  <button style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem">Back to Request</button></a>  

            <div class="event-request" style="margin-top:60px">
                <table style="width:1000px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Supplier</th>
                            <th>Package</th>
                            <th>Sent Date</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>View More</th>
                            <th>Message with Supplier</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['quote'] as $q) : ?>
                            <tr>

                                <td><?php echo $q->qid; ?></td>
                                <td><?php echo  $q->bname ?></td>
                                <td><?php echo  $q->package ?></td>
                                <td> <?php echo $q->send_date; ?>
                                <td><?php echo $q->r_price; ?></td>
                                <td> <?php echo $q->status; ?></td>
                                <td>
                                    <button class="viewBtn" data-target="<?php echo $q->qid; ?>">View</button>
                                </td>

                                <td><a href="<?php echo URLROOT; ?>eventplanners/message/<?php echo  $q->qid; ?> ">Message</a> </td>


                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>



        </div>


</body>

<script>
    $(document).ready(function() {
        $('.viewBtn').click(function() {
            var targetId = $(this).data('target');
            $('#myModal-' + targetId).show();
        });

        // Close modal when clicking outside
        $(window).click(function(event) {
            if ($(event.target).hasClass('modal')) {
                $('.modal').hide();
            }
        });
    });
</script>


</html>