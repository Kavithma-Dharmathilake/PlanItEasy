<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Payments</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/events">
                    <span class="material-icons-sharp">man</span>
                    <h3>Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments" class="active">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <!-- <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a> -->
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
            <h1>Your Transactions</h1>

            <div class="plan_info_container">
                <table>
                    <caption>Requested Services</caption>
                    <thead>
                        <tr>
                            <th scope="col">Event ID</th>
                            <th scope="col">Budget ID</th>
                            <th scope="col">Amount(LKR)</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['payments'] as $payment) : ?>
                        <tr>
                            <td data-label="Service"><?php echo $payment->rid; ?></td>
                            <td data-label="Vendor Name"><?php echo $payment->bid; ?></td>
                            <td data-label="Amount(LKR)"><?php echo $payment->amount; ?></td>
                            <td data-label="Amount(LKR)"><?php echo $payment->description; ?></td>
                            <td data-label="">
                                <!-- <form action="<?php echo URLROOT ?>customers/deleteItem/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>/<?php echo $l->id ?>" method="POST">
                                    <input name="remove" type="submit" class="rmv" value="Remove">
                                </form> -->
                            </td>
                        </tr>
                        <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>