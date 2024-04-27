<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDash</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
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
                <a href="<?php echo URLROOT ?>admin/index" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/user">
                    <span class="material-icons-sharp">group</span>
                    <h3>Users</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/analytics">
                    <span class="material-icons-sharp">leaderboard</span>
                    <h3>Analytics</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="<?php echo URLROOT ?>admin/suppliers">
                    <span class="material-icons-sharp">face_3</span>
                    <h3>Suppliers</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/eventplanners">
                    <span class="material-icons-sharp">group</span>
                    <h3>Event Planners</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/userreq">
                    <span class="material-icons-sharp">analytics</span>
                    <h3>User Requests</h3>
                </a>
             
                <a href="<?php echo URLROOT ?>">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="users">
                    <span class="material-icons-sharp">groups</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Users</h3>
                            <h1>1,259</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 Hours</small>
                </div>


                <div class="eventplanners">
                    <span class="material-icons-sharp">groups</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Event planners</h3>
                            <h1>27</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>3%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 Hours</small>
                </div>


                <div class="suppliers">
                    <span class="material-icons-sharp">groups</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Suppliers</h3>
                            <h1>167</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>16%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 Hours</small>
                </div>
            </div>
            <!------------End of insights------------>
            <div class="recent-trans">
                <h2>Recent Transactions</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Customer Name</th>
                            <th>Event Planner Name</th>
                            <th>Transaction Amount</th>
                            <th>Transaction Date</th>
                            <th>Transaction Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>A.A.Silva</td>
                            <td>B.C.Fernando</td>
                            <td>1,000,000 lkr</td>
                            <td>21/10/2023</td>
                            <td class="warning">Pending</td>
                        </tr>
                        <tr>
                            <td>0001</td>
                            <td>A.A.Silva</td>
                            <td>B.C.Fernando</td>
                            <td>1,000,000 lkr</td>
                            <td>21/10/2023</td>
                            <td class="warning">Pending</td>
                        </tr>
                        <tr>
                            <td>0001</td>
                            <td>A.A.Silva</td>
                            <td>B.C.Fernando</td>
                            <td>1,000,000 lkr</td>
                            <td>21/10/2023</td>
                            <td class="warning">Pending</td>
                        </tr>
                        <tr>
                            <td>0001</td>
                            <td>A.A.Silva</td>
                            <td>B.C.Fernando</td>
                            <td>1,000,000 lkr</td>
                            <td>21/10/2023</td>
                            <td class="warning">Pending</td>
                        </tr>
                        <tr>
                            <td>0001</td>
                            <td>A.A.Silva</td>
                            <td>B.C.Fernando</td>
                            <td>1,000,000 lkr</td>
                            <td>21/10/2023</td>
                            <td class="warning">Pending</td>
                        </tr>
                    </tbody>
                </table>
                <a href="">Show All</a>
            </div>
        </main>
        <!--------------END OF MAIN-------------->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Sunimal</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?php echo URLROOT; ?>/public/images/photo2.jpg">
                    </div>
                </div>
            </div>
            <!-- End of top-->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="<?php echo URLROOT; ?>/public/images/photo1.jpg">
                            </div>
                            <div class="message">
                                <p><b>Amal Gunasinghe</b>Updated his business name</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="<?php echo URLROOT; ?>/public/images/photo1.jpg">
                            </div>
                            <div class="message">
                                <p><b>Amal Gunasinghe</b>Updated his business name</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="<?php echo URLROOT; ?>/public/images/photo1.jpg">
                            </div>
                            <div class="message">
                                <p><b>Amal Gunasinghe</b>Updated his business name</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                    </div>
            </div>

            <!------------ END OF RECENT UPDTAES ------------>
            <div class="analytics">
                <h2>Analytics</h2>
                <div class="events completed">
                    <div class="right">
                        <div class="info">
                            <h3>Completed Events</h3>
                            <small class="text-muted">this year</small>
                        </div>
                        <h4 class="success">127</h4>
                    </div>
                </div>

                <div class="events booked">
                    <div class="right">
                        <div class="info">
                            <h3>Booked Events</h3>
                            <small class="text-muted">this year</small>
                        </div>
                        <h4 class="warning">17</h4>
                    </div>
                </div>

                <div class="events incomplete">
                    <div class="right">
                        <div class="info">
                            <h3>Incomplete Events</h3>
                            <small class="text-muted">this year</small>
                        </div>
                        <h4 class="danger">2</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>