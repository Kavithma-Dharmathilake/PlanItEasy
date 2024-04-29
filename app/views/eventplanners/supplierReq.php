<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="<?php echo URLROOT ?>eventplanners/portfolio">
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
                <a href="<?php echo URLROOT ?>users/logout">
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
                    <p>Hey, <b>Sunimal</b></p>
                    <small class="text-muted">Eventplanner</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>



            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Supplier Quotations</h1>


                </div>
                <div class="planner-search">
                    <form action="#" method="post">

                        <input type="search" id="query" name="q" placeholder="       Search Requests"
                            class="planner-textbox">

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
                            <th>Quotation ID</th>
                            <th>Event ID</th>
                            <th>Request ID</th>
                            <th>Supplier name</th>
                            <th>Charges</th>
                            <th>Remarks</th>
                            <th>More</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                           <td>#SQ003</td>
                           <td>#R0003</td>
                           <td>#QR005</td>
                           <td>CaptureX</td>
                           <td>Rs.10000.00</td>
                           <td>--none--</td>
                           <td>></td>
                        </tr>
                        <tr>
                           <td>#SQ003</td>
                           <td>#R0003</td>
                           <td>#QR005</td>
                           <td>CaptureX</td>
                           <td>Rs.10000.00</td>
                           <td>--none--</td>
                           <td>></td>
                        </tr>
                        <tr>
                           <td>#SQ004</td>
                           <td>#R0006</td>
                           <td>#QR008</td>
                           <td>Sri Malee Grand</td>
                           <td>Rs.10000.00</td>
                           <td>--none--</td>
                           <td>></td>
                        </tr>
                        <tr>
                           <td>#SQ001</td>
                           <td>#R0003</td>
                           <td>#QR002</td>
                           <td>rasa bojun</td>
                           <td>Rs.10000.00</td>
                           <td>--none--</td>
                           <td>></td>
                        </tr>
                        <tr>
                           <td>#SQ006</td>
                           <td>#R0003</td>
                           <td>#QR0014</td>
                           <td>Lassana Flora</td>
                           <td>Rs.10000.00</td>
                           <td>--none--</td>
                           <td>></td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>



        </div>

</body>

</html>