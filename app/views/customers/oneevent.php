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
         

            <!-- The Title -->

            <div class="heading-card">
                <span style="font-size:1.5rem;font-style:bold"><?php echo getRemainingDays($data['request']->date) ?></span> days remaining!<br />
                <span style="font-size:3rem;font-style:bold; "><?php echo $data['request']->event_type ?></span><br />

                <span style="margin-top:1rem" class="material-icons-sharp">
                    location_on
                </span> &nbsp; <?php echo $data['request']->location ?>
                <span style="margin-left:1rem" class="material-icons-sharp">
                    watch_later
                </span> &nbsp; <?php echo $data['request']->starttime ?> - <?php echo $data['request']->endtime ?>
                <span style="margin-left:1rem" class="material-icons-sharp">
                    attach_money
                </span> &nbsp;Rs. <?php echo $data['request']->minbudget ?> /-

            </div>

            <div style="display: flex; margin-left:6rem">
              
                <a href="<?php echo URLROOT ?>customers/supplier/<?php echo $data['request']->id ?>">
                    <div class="event-tabs"><span class="material-icons-sharp">
                            storefront
                        </span> <br />Suppliers</div>
                </a>
                <a href="<?php echo URLROOT ?>customers/quotations/<?php echo $data['request']->id ?>">
                    <div class="event-tabs">
                        <span class="material-icons-sharp">
                            request_quote
                        </span><br />Quotations
                    </div>
                </a>
                <a href="<?php echo URLROOT ?>customers/budget/<?php echo $data['request']->id ?>">
                    <div class="event-tabs">
                        <span class="material-icons-sharp">
                            paid
                        </span> <br />Budgeter
                    </div>
                </a>
                <a href="<?php echo URLROOT ?>customers/checklist/<?php echo $data['request']->id ?>">
                    <div class="event-tabs">
                        <span class="material-icons-sharp">
                            groups
                        </span><br />Guest List
                    </div>
                </a>
                <a href="<?php echo URLROOT ?>customers/checklist/<?php echo $data['request']->id ?>">
                    <div class="event-tabs"> <span class="material-icons-sharp">
                            fact_check
                        </span> <br />Checklist</div>
                </a>
              

            </div>




        </div>


</body>

</html>

<?php

function getRemainingDays($targetDate)
{
    // Convert the target date to a DateTime object
    $targetDateTime = new DateTime($targetDate);

    // Get the current date as a DateTime object
    $currentDateTime = new DateTime();

    // Calculate the difference between the target date and the current date
    $interval = $currentDateTime->diff($targetDateTime);

    // Extract the remaining days from the interval
    $remainingDays = $interval->days;

    return $remainingDays;
}





?>