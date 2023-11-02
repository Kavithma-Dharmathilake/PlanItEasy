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
    <link rel="stylesheet" href="./css/admindash.css">
    <link rel="stylesheet" href="./css/eventplannerdash.css">
    
</head>

<body>
    <div class="dash-container">
    <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/logo.jpg">
                    <h2>PlanItEasy</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="products.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Products</h3>
                </a>

                <a href="quotationRequest.php">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Quotation Requests</h3>
                </a>

                <a href="sentRequests.php">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Sent Quotations</h3>
                </a>

                <a href="newProjectReq.php" class="active">
                    <span class="material-icons-sharp">
                        request_quote
                    </span>
                    <h3>New Project Requests</h3>
                </a>
                <a href="completedProjects.php">
                    <span class="material-icons-sharp">
                        paid
                    </span>
                    <h3>Completed Projects</h3>
                </a>

                <a href="eventplanners/calendar">
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

                <a href="eventplanners/messages">
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
                    <h1>New Projects</h1>


                </div>
                <div class="planner-search">
                    <form action="#" method="post">

                        <input type="search" id="query" name="q" placeholder="       Search Projects"
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
                            <th>Event ID</th>
                            <th>Event type</th>
                            <th>Number of Guests</th>
                            <th>Budget</th>
                            <th>Tentative Date</th>
                            <th>Event Status</th>
                            <th>More</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td>0001</td>
                            <td>Wedding</td>
                            <td>250</td>
                            <td>1,000,000 LKR</td>
                            <td>21/10/2023</td>
                            <td>Pending</td>
                            <td><a href="eventplanners/onerequest"><i class="fa-solid fa-angles-right"></i></a></td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>Birthday</td>
                            <td>25</td>
                            <td>10,000 LKR</td>
                            <td>01/11/2023</td>
                            <td>Pending</td>
                            <td><a href=""><i class="fa-solid fa-angles-right"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </div>

</body>

</html>