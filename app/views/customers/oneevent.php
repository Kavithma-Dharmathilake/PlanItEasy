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

  


    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">

    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/event-form.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/budgetplan.css">

</head>

<body>
    <div class="dash-container">
        <aside>

            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers" class="active">
                    <span class="material-icons-sharp">grid_view</span>
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
                <!-- <a href="<?php echo URLROOT; ?>customers/message">
        <span class="material-icons-sharp">message</span>
        <h3>Messages</h3>
    </a> -->
                <!-- <a href="<?php echo URLROOT; ?>customers/viewquote">
        <span class="material-icons-sharp"> note_add</span>
        <h3>supplier quotation</h3>
    </a> -->
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
        <div class="your-event-container">


            <!-- The Title -->

            <div class="heading-card">
                <div class="heading-card-top">
                    <p><?php echo $data['request']->event_type ?></p>
                </div>
                <div class="heading-card-remain">
                    <p>Remaining Days : </p><?php echo getRemainingDays($data['request']->date) ?>
                   
                </div>

                <div class="heading-card-subcontainer">
                    <div class="span-container">
                        <span style="margin-top:1rem" class="material-icons-sharp">
                            location_on
                        </span> &nbsp; <?php echo $data['request']->location ?>
                    </div>
                    <div class="span-container">
                        <span style="margin-left:1rem" class="material-icons-sharp">
                            watch_later
                        </span> &nbsp; <?php echo $data['request']->starttime ?> - <?php echo $data['request']->endtime ?>
                    </div>
                    <div class="span-container">
                        <span style="margin-left:1rem" class="material-icons-sharp">
                            attach_money
                        </span> &nbsp;Rs. <?php echo $data['request']->minbudget ?>
                    </div>
                </div>

            </div>

            <div class="option-container">

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
                <!-- <a href="<?php echo URLROOT ?>customers/checklist/<?php echo $data['request']->id ?>">
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
                </a> -->


            </div>




        </div>

        <div class="right">

            <!-- End of top-->


            <div class="recieved_quotations">
                <h2>Recieved Quotations</h2>
                <div class="recieved_quotations_container">
                    <?php

                    function Daysleft($date)
                    {

                        $currentDate = new DateTime();
                        $receivedDate = new DateTime($date);

                        // Calculate the expiration date by adding 7 days to the received date
                        $expirationDate = clone $receivedDate; // Clone the DateTime object to avoid modifying the original received date
                        $expirationDate->modify('+7 days');

                        // Step 3: Calculate the difference in days between the current date and the expiration date
                        $interval = $currentDate->diff($expirationDate);
                        $daysLeft = $interval->days;

                        // Check the direction of the interval
                        if ($interval->invert) {
                            // The expiration date has already passed, so the difference is negative
                            echo "The Quotation has already expired.";
                        } else {
                            // The expiration date is in the future
                            echo "<p style='color:#7380ec'>Quotation will expire after $daysLeft days.<p>";
                        }
                    } ?>
                    <?php foreach ($data['quote'] as $q) : ?>

                        <div class="recieved_subcontainer">
                            <h3><?php echo $q->bname; ?> - LKR.<?php echo $q->r_price; ?> </h3>
                            <p><?php echo $q->stype; ?></p>
                            <p><?php DaysLeft($q->received_date); ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>



        </div>


    </div>


</body>

</html>

<?php

function getRemainingDays($targetDate)
{

    $targetDateTime = new DateTime($targetDate);
    $currentDateTime = new DateTime();
    $interval = $currentDateTime->diff($targetDateTime);
    $remainingDays = $interval->days;
    return $remainingDays;
}






?>




