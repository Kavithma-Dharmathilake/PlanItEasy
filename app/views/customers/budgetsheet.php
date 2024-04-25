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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/budgetplan.css">


</head>

<body>
    <div class="dash-container">
        <aside>

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

        <div class="budgetplan_container">
            <h1>Budget Plan - #BID<?php echo $data['bid'] ?></h1>

            <div class="plan_info_container">
                <div style="display:flex">
                    <!-- <form action="<?php echo URLROOT ?>customers/pricebudget/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>">
                        <input id="pricebtn" name="price" type="submit" class="view" value="Budget By Price">
                    </form> -->
                    <a href="<?php echo URLROOT ?>customers/pricebudget/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>" class="view">Budget By Price</a>
                    <form action="<?php echo URLROOT ?>customers/ratingbudget/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>" method="POST">
                        <input id="pricebtn" name="rate" type="submit" class="view" value="Budget By Rating">
                    </form>
                </div>
                <table>
                    <caption>Requested Services</caption>
                    <thead>
                        <tr>
                            <th scope="col">Service</th>
                            <th scope="col">Vendor Name</th>
                            <th scope="col">Amount(LKR)</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0.00 ?>
                        <?php

                        if ($data['budget'] != null) {
                            foreach ($data['budget'] as $l) : ?>
                                <tr>
                                    <td data-label="Service"><?php echo ucwords($l->stype); ?></td>
                                    <td data-label="Vendor"><?php echo $l->bname; ?></td>
                                    <td data-label="Amount"><?php echo $l->r_price; ?></td>
                                    <td data-label="">
                                        <form action="<?php echo URLROOT ?>customers/deleteItem/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>/<?php echo $l->id ?>" method="POST">
                                            <input name="remove" type="submit" class="rmv" value="Remove">
                                        </form>
                                    </td>
                                    <?php $total = $total +  $l->r_price; ?>
                                </tr>
                            <?php endforeach;
                            ?>
                            <tr>
                                <td data-label="Service">
                                    <p style="font-weight: 600;">Total Amount </p>

                                    <?php if ($total > $data['request']->maxbudget) { ?>
                                        <p style="color:red">Maximum Budget Reached <br />(LKR <?php echo $data['request']->maxbudget ?>)</p>
                                    <?php } else if ($total < $data['request']->minbudget) { ?>
                                        <p style="color:red">Less than the Minimum Budget <br />(LKR <?php echo $data['request']->maxbudget ?>)</p>
                                    <?php } ?>
                                </td>
                                <td data-label="Vendor"></td>
                                <td data-label="Amount"><?php echo $total; ?></td>
                                <td data-label="">
                                    <form action="<?php echo URLROOT ?>customers/budgetsheet/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>" method="POST">
                                        <input name="accept" type="submit" class="accept" value="Accept the Budget">
                                    </form>
                                    

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div>

        <div class="recieved_quotations">
            <h2>Recieved Quotations</h2>
            <div class="recieved_quotations_container">
                <?php foreach ($data['quote'] as $q) : ?>
                    <?php $status = 0; ?>
                    <div class="recieved_subcontainer">
                        <h3><?php echo $q->bname; ?> - LKR.<?php echo $q->r_price; ?> </h3>
                        <p><?php echo $q->stype; ?></p>
                        <div class="btn_action">
                            <button class="view">View</button>

                            <?php
                            foreach ($data['budget'] as $b) :
                                if ($b->qid == $q->id) {
                                    $status = 1;
                                    break;
                                }
                            endforeach ?>

                            <form action="<?php echo URLROOT ?>customers/addItem/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>/<?php echo $q->id ?>" method="POST">
                                <input name="add" type="submit" class="accept" <?php
                                                                                if ($status == 1) {
                                                                                    echo 'value="Added"';
                                                                                    echo 'disabled';
                                                                                } else
                                                                                    echo 'value="Add"';

                                                                                ?>>
                            </form>


                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>




</html>