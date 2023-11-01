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



        <!-- Content start here -->
        <div>
            <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b>Sunimal</b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>

            <!-- Heading and search bar -->


            <div class="planner-title" style="padding-bottom:50px;">
                <h1>Add New Supplier</h1>
            </div>
<form action="#" method="post">
            <div class="form-add-package">
                <div class="form-wrapper">
                    <div class="form-heading">
                        <h2 style="padding: 20px;">Add New Package</h2>
                    </div>
                    <div class="form-content">
                        <div class="input-box">
                            <input type="text" placeholder="Package Name" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Event type" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Service type" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Price" required>
                        </div>
                        <div class="text-box">
                            <textarea name="description" id="descript" cols="50" rows="5">         Enter a description for the package
                          </textarea>
                        </div>
                        <div class="package-imgs">

                            <div class="package-img">
                                <input type="file" id="file-selector1" accept=".jpg, .jpeg, .png" style="display: none;">
                                <label for="file-selector1" id="file-label1">
                                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                                    </i>
                                </label>
                            </div>
                            <div class="package-img">
                                <input type="file" id="file-selector2" accept=".jpg, .jpeg, .png" style="display: none;">
                                <label for="file-selector2" id="file-label2">
                                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                                    </i>
                                </label>
                            </div>
                            <div class="package-img">
                                <input type="file" id="file-selector3" accept=".jpg, .jpeg, .png" style="display: none;">
                                <label for="file-selector3" id="file-label3">
                                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                                    </i>
                                </label>
                            </div>
                            <script src="<?php echo URLROOT; ?>public/js/planner.js"></script>
                        </div>
                        <div class="package-imgs">

                            <div class="package-img">
                                <input type="file" id="file-selector4" accept=".jpg, .jpeg, .png" style="display: none;">
                                <label for="file-selector4" id="file-label4">
                                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                                    </i>
                                </label>
                            </div>
                            <div class="package-img">
                                <input type="file" id="file-selector5" accept=".jpg, .jpeg, .png" style="display: none;">
                                <label for="file-selector5" id="file-label5">
                                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                                    </i>
                                </label>
                            </div>
                            <div class="package-img">
                                <input type="file" id="file-selector6" accept=".jpg, .jpeg, .png" style="display: none;">
                                <label for="file-selector6" id="file-label6">
                                    <i class="fa fa-add" style="font-size: 18px; padding-right:15px;">
                                    </i>
                                </label>
                            </div>
                            <script src="<?php echo URLROOT; ?>public/js/planner.js"></script>
                        </div>
                        <div class="input-box">
                            <input type="Submit" value="Submit" class="input-submit">
                        </div>




                    </div>
                </div>
            </div>
            </form>



</body>

</html>