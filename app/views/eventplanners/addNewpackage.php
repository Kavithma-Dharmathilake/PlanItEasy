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
                <a href="<?php echo URLROOT; ?>eventplanners">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT ?>eventplanners/packages" class="active">
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

            


            <div class="planner-title" style="padding-bottom:50px;">
                <h1>Packages and Services</h1>
            </div>
            <form action="<?php echo URLROOT ?>eventplanners/addNewPackage" method="post" enctype="multipart/form-data">
                <div class="form-add-package">
                    <div class="form-wrapper">
                        <div class="form-heading">
                            <h2 style="padding: 20px;">Add New Package</h2>
                        </div>
                        <div class="form-content">

                            <div class="input-box">
                                <label>Package Name<span style="color:red"><sup>*</sup></span></label><br />
                                <input type="text" placeholder="Enter Package Name" name="name"
                                    value="<?php echo $data['name']; ?>">
                               
                            </div>
                            <div class="input-box">
                                <div class="select-box">
                                    <label>Event type<span style="color:red"><sup>*</sup></span></label><br />
                                    <select name="type" style=" border-color:var(--color-primary);">
                                        <option value="" selected>Select Event type</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Birthday">Birthday</option>
                                        <option value="Gender Reveal">Gender Reveal</option>
                                        <option value="Engagements">Engagements</option>
                                        <option value="Anniversary">Anniversary</option>
                                        <option value="Other">Other</option>
                                        <!-- Add more event types as needed -->
                                    </select>
                                </div>
                                    
                                <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['type_err']; ?>
                                </span>
                            </div>
                            <div class="input-box">
                                <label>Price<span style="color:red"><sup>*</sup></span></label><br />
                                <input type="text" placeholder="Price" name="price"
                                    value="<?php echo $data['price']; ?>">
                                    <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['price_err']; ?>
                                </span>
                            </div>
                            <div class="text-box">
                                <label>Description for package<span style="color:red"><sup>*</sup></span></label><br />
                                <textarea name="description" id="descript" cols="50" rows="5"
                                    value="<?php echo $data['description']; ?>">        
                          </textarea>
                          <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['description_err']; ?>
                                </span>
                            </div>
                            <label>Images For The Pacakge<span style="color:red"><sup>*</sup></span></label><br />
                            <div class="package-imgs">


                                <div class="package-img">
                                    <input type="file" id="file-selector1" accept=".jpg, .jpeg, .png"
                                        style="display: none;" name="img">
                                    <label for="file-selector1" id="file-label1">
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