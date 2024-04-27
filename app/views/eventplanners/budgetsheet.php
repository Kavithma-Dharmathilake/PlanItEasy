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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.18/jspdf.plugin.autotable.min.js"></script>



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
                <a href="<?php echo URLROOT ?>eventplanners/budget">
                    <span class="material-icons-sharp">
                        paid
                    </span>
                    <h3>Budget Plans</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/calendar" class="active">
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



        <div class="budgetplan_container">
            <h1>Budget Plan - #BID<?php echo $data['bid'] ?></h1>

            <div class="plan_info_container">
                <div style="display:flex">
                    <!-- <form action="<?php echo URLROOT ?>customers/pricebudget/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>">
                        <input id="pricebtn" name="price" type="submit" class="view" value="Budget By Price">
                    </form> -->
                    <a href="<?php echo URLROOT ?>eventplanners/pricebudget/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>" class="view">Lowest Budget</a>
                    <a href="<?php echo URLROOT ?>eventplanners/plannercharge/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>" class="view">Add My Charge</a>

                    <button id="generate-pdf">Generate PDF</button>
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
                        <?php $total = 0.00;
                        $planner = false;
                        ?>
                        <?php

                        if ($data['budget'] != null) {
                            foreach ($data['budget'] as $l) : ?>
                                <tr>
                                    <td data-label="Service"><?php echo ucwords($l->stype); ?></td>
                                    <td data-label="Vendor"><?php echo $l->bname; ?></td>
                                    <td data-label="Amount"><?php echo $l->r_price; ?></td>
                                    <td data-label="">
                                        <form action="<?php echo URLROOT ?>eventplanners/deleteItem/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>/<?php echo $l->id ?>" method="POST">
                                            <input name="remove" type="submit" class="rmv" value="Remove">
                                        </form>
                                    </td>
                                    <?php $total = $total +  $l->r_price; ?>
                                </tr>
                                <?php

                                if ($l->stype == 'Eventplanner') {
                                    $planner = true;
                                }
                                ?>
                            <?php endforeach;

                            ?>
                            <?php if (!$planner) { ?>
                                <tr>
                                    <td data-label="Service">Eventplanner</td>
                                    <td data-label="Vendor"><?php echo $data['user']->bname; ?></td>
                                    <td data-label="Amount">
                                        <form action="<?php echo URLROOT ?>eventplanners/addPlannerCharge/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>/<?php echo $l->id ?>" method="POST">
                                            <input type="number" name="price" required placeholder="|Add your charge here">

                                    </td>
                                    <td data-label="">
                                        <input name="Add" type="submit" class="accept" value="Add">
                                        </form>
                                    </td>

                                </tr>
                            <?php  } ?>
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
                                    <form action="<?php echo URLROOT ?>eventplanners/budgetsheet/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>" method="POST">
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
                                if ($b->qid == $q->qid) {
                                    $status = 1;
                                    break;
                                }
                            endforeach ?>

                            <form action="<?php echo URLROOT ?>eventplanners/addItem/<?php echo $data['bid'] ?>/<?php echo $data['eventid'] ?>/<?php echo $q->qid ?>" method="POST">
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


<script>
    document.getElementById('generate-pdf').addEventListener('click', function() {
        const url = `<?php echo URLROOT ?>eventplanners/downloadbudget/${<?php echo $data['bid'] ?>}/${<?php echo $data['eventid'] ?>}`;
        console.log('Fetching data from URL:', url);
        fetch(url)
            .then(response => {
                // Check if the response is OK (status code 200)
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Parse the JSON data from the response
                return response.json();
            })
            .then(data => {
                // Process the data (e.g., generate PDF)
                // Create a new PDF document
                const {
                    jsPDF
                } = window.jspdf;
                const doc = new jsPDF();

                //Add a heading to the PDF
                doc.setFontSize(16); // Set the font size
                doc.text('Budget Sheet', 10, 20); // Add heading at position (x, y)

                // Define the table headers and data
                const headers = [
                    ['BudgetID', 'QuotationID', 'Type', 'Price', 'Supplier']
                ];


                // Convert data array to format compatible with autoTable
                const rows = data.map(item => [item.bid, item.qid, item.stype, item.r_price, item.bname]);
                const totalPrice = data.reduce((sum, item) => sum + parseFloat(item.r_price), 0);

                // Add the table to the PDF
                doc.autoTable({
                    startY: 30, // Start the table below the heading
                    head: headers, // Table headers
                    body: rows, // Table data
                    theme: 'grid', // Table theme (can be 'grid', 'striped', or 'plain')
                    didDrawPage: function(data) {
                        // Calculate the position for the footer based on the table's height
                        const footerY = data.cursor.y + 10; // Add some padding

                        // Add a footer containing the total price
                        doc.setFontSize(12); // Set font size for footer
                        doc.text(`Total Price: ${totalPrice.toFixed(2)}`, data.settings.margin.left, footerY);
                    }
                });

                // Save the PDF
                doc.save('output.pdf');
            })
            .catch(error => {
                // Handle errors (e.g., network errors)
                console.error('Error fetching data:', error);
            });
    });
</script>

</html>