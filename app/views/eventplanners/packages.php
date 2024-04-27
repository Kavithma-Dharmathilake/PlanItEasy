<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/requests.css">
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
                <a href="<?php echo URLROOT; ?>eventplanners" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/packages">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Packages</h3>
                </a>
                <a href="<?php echo URLROOT ?>eventplanners/quoteReq">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Portfolio</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/eventRequest">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Event Requests</h3>
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


        <main>
            <h1>Your Packages</h1>

            <div style="padding-top:40px;">
                <a href="<?php echo URLROOT; ?>eventplanners/addNewPackage" class="package-add">
                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                    </i>
                    Add new Package
                </a>
            </div>

            <div class="userRequest_table">
                <table>
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>PRoduct Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Servces</th>
                            <th>Created At</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($data as $i) : ?>


                            <tr>
                                <td> #PO<?php echo $i->id ?></td>
                                <td> <?php echo $i->name ?></td>
                                <td> <?php echo $i->description ?></td>
                                <td> <?php echo $i->price ?></td>
                                <td> <?php echo $i->services ?></td>
                                <td> <?php echo $i->date ?></td>
                                <td><a href="<?php echo URLROOT ?>suppliers/updatepackage/<?php echo $i->id ?>"><button class="btn_accept" type="button">Update</button></a></td>
                                <td><a href="<?php echo URLROOT ?>suppliers/deleteuser/<?php echo $i->id ?>"><button class="btn_reject" type="button" onclick="confirmDelete(<?php echo $i->id ?>)">Delete</button></a></td>
                                </td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>

            </main>



</body>
<script>
    function confirmDelete(requestId) {
        var confirmation = confirm("Are you sure you want to Delete?");
        if (confirmation) {
            deleteReq(requestId);
        } else {

        }
    }

    function deleteReq(requestId) {
        alert('User #' + requestId + ' has been deleted.');

    }

    function confirmReject(requestId) {
        var confirmation = confirm("Are you sure you want to reject this request?");
        if (confirmation) {
            rejectRequest(requestId);
        } else {

        }
    }

    function rejectRequest(requestId) {
        alert('Request #' + requestId + ' has been reject.');
    }
</script>

</html>