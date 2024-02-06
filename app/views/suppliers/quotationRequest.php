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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">

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
                <a href="<?php echo URLROOT; ?>suppliers/index" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/products">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Products</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/quotationRequest">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Quotation Requests</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/sentRequests">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Sent Quotations</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/newProjectReq">
                    <span class="material-icons-sharp">
                        request_quote
                    </span>
                    <h3>New Project Requests</h3>
                </a>
                <a href="<?php echo URLROOT; ?>suppliers/completedProjects">
                    <span class="material-icons-sharp">
                        paid
                    </span>
                    <h3>Completed Projects</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/eventplanners/calendar">
                    <span class="material-icons-sharp">
                        calendar_month
                    </span>
                    <h3>Calender</h3>
                </a>

                <a href="profile.php">
                    <span class="material-icons-sharp">
                        account_box
                    </span>
                    <h3>Profile</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/eventplanners/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">5</span>
                </a>

                <!-- <a href="eventplanners/inquiry">
                    <span class="material-icons-sharp">
                        info
                    </span>
                    <h3>Inquiry</h3>
                </a> -->
                <a href="">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        <main>


            <!-- Content start here -->
            <div>
                <div class="profile end">
                    <div class="info" style="padding-right:25px;">
                        <p>Hey, <b>Abhi</b></p>
                        <small class="text-muted">Supplier</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/photo1.jpg">
                    </div>
                </div>



                <!-- Heading and search bar -->
                <div style="display:flex">

                    <div class="planner-title">
                        <h1>Quotation Requests</h1>


                    </div>
                    <div class="planner-search">
                        <form action="#" method="post">

                            <input type="search" id="query" name="q" placeholder="       Search Requests" class="planner-textbox">

                            <button>
                                <i class="fa fa-search" style="font-size: 18px;">
                                </i>
                            </button>
                        </form>
                    </div>

                </div>

                <!-- Event Request Table -->
                <div class="event-request" style="margin-top:60px">

                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Package</th>
                                <th>Received Date</th>
                                <th>Request Status</th>
                                <th>More</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <?php foreach ($data['request'] as $req) : ?>
                                    <td>#RQ<?php echo $req->id ?></td>
                                    <td><?php echo $req->package ?></td>
                                    <td><?php echo $req->send_date ?></td>
                                    <td><?php echo $req->q_status ?></td>
                                    <td><a href="<?php echo URLROOT; ?>suppliers/oneRequest/<?php echo $req->id ?>"><i class="fa-solid fa-angles-right"></i></a></td>
                            </tr>
                        <?php endforeach; ?>



                        </tbody>
                    </table>
                </div>



            </div>

</body>

</html>