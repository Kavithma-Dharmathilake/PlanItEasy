<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDash</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <a href="<?php echo URLROOT ?>admin/index">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/user">
                    <span class="material-icons-sharp">group</span>
                    <h3>Users</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/analytics" class="active">
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
                <a href="#">
                    <span class="material-icons-sharp">group</span>
                    <h3>Event Planners</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/userreq">
                    <span class="material-icons-sharp">analytics</span>
                    <h3>User Requests</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Analytics </h1>


            <h3>Total Users</h3>
        <div>
            <div style="display:flex">
                <div style="width:500px">ekcnkjcne   djbcjbdjcbd</div>
                <div style="width:400px">wekckjnckebccv  cdjcjdbc</div>
            </div>
            <div></div>
        </div>


        </main>


    </div>

</body>

</html>