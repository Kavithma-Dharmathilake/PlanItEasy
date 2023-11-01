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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="<?php echo URLROOT ?>admin/index" >
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT ?>admin/user" >
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
                <a href="<?php echo URLROOT ?>admin/suppliers" class="active">
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
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Suppliers</h1>
            <a href="<?php echo URLROOT ?>admin/newsupplier">   <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                    </i>Add New Supplier</a>
         
          
            <!------------End of insights------------>
            <div class="recent-trans">
                <h2></h2>
                <table>
                    <thead>
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Business Name</th>
                            <th>Service Type</th>
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
               
            </div>
        </main>
        <!--------------END OF MAIN-------------->

    </div>

</body>
</html>