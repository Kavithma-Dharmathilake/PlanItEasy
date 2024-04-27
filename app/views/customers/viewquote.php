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
                <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
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




            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Your Quotations</h1>
                </div>
            </div>
            <div style="display:flex; flex-direction:row">
                <div class="event-details" style="width:700px;">
                    <p style="text-align:center">Requested Quotation</p>

                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px; ">
                        <div class="req-title" style="width:50%">Supplier</div>
                        <div class="req-data" style="width:50%"><?php echo $data->bname  ?></div>
                    </div>

                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Package</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->package  ?> - (LKR. <?php echo  $data->price ?>)</div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Sent date</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->send_date  ?> </div>
                    </div>


                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Your Remarks</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->remarks  ?></div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Supplier Remarks</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->s_remark  ?></div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Service Duration</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->stime  ?> to <?php echo  $data->etime  ?> </div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Received date</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->received_date  ?> </div>
                    </div>
                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Additional Services</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->additional_services ?> </div>
                    </div>
                    <?php if ($data->stype == 'decoration') : ?>
                        <!-- Display types of flowers for decoration -->
                        <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                            <div class="req-title" style="width:50%">Types of Flowers</div>
                            <div class="req-data" style="width:50%"><?php echo $data->flowers; ?></div>
                        </div>
                    <?php endif; ?>

                    <?php if ($data->stype == 'catering') : ?>

                        <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                            <div class="req-title" style="width:50%">Time </div>
                            <div class="req-data" style="width:50%"><?php echo $data->time; ?></div>
                        </div>
                    <?php endif; ?>
                    <div style="display:flex; margin-top:20px; margin-left:30px; border-bottom:2px ridge;padding-bottom:5px;">
                        <div class="req-title" style="width:50%">Quotation Status</div>
                        <div class="req-data" style="width:50%"><?php echo  $data->status  ?></div>
                    </div>



                </div>

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