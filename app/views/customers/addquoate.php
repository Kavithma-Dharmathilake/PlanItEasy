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
            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp">man</span>
                    <h3>Create New Event</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/ongoing">
                    <span class="material-icons-sharp">calendar_today</span>
                    <h3>Ongoing Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/complete">
                    <span class="material-icons-sharp">event_available</span>
                    <h3>Completed Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/viewquote" class="active">
                    <span class="material-icons-sharp"> note_add</span>
                    <h3>supplier quotation</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile">
                    <span class="material-icons-sharp">person</span>
                    <h3>profile</h3>
                </a>
                <a href="<?php echo URLROOT; ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>


        </aside>



        <!-- Content start here -->
        <div>
            <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b>Pawani</b></p>
                    <small class="text-muted">Customer</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                </div>
            </div>

            <!-- Heading and search bar -->


            <div class="planner-title" style="padding-bottom:50px;">
                <h1>Send A Quotation</h1>
            </div>
            <main>
            <form action="<?php echo URLROOT ?>customers/addquoate" method="post" enctype="multipart/form-data">
                <div class="form-add-package">
                    <div class="form-wrapper">
                        <div class="form-heading">
                            <h2 style="padding: 20px;">Add New Quoate</h2>
                        </div>
                        <div class="form-content">

                            <div class="input-box">
                                <label>Supplier Name<span style="color:red"><sup>*</sup></span></label><br />
                                <input type="text" placeholder="Supplier Name" name="name"
                                    value="<?php echo $data['name']; ?>">
                                    <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['name_err']; ?>
                                </span>
                               
                            </div>
                          
                            <div class="input-box">
                                <label>Event Date: <span style="color:red"><sup>*</sup></span></label><br />
                                <input type="date" placeholder="Date" name="date"
                                    value="<?php echo $data['date']; ?>">
                                    <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['date_err']; ?>
                                </span>
                            </div>
                            <div class="input-box">
                                <label>Start Time: <span style="color:red"><sup>*</sup></span></label><br />
                                <input type="time" placeholder="Time" name="stime"
                                    value="<?php echo $data['stime']; ?>">
                                    <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['stime_err']; ?>
                                </span>
                            </div>
                            <div class="input-box">
                                <label>End Time: <span style="color:red"><sup>*</sup></span></label><br />
                                <input type="time" placeholder="Time" name="etime"
                                    value="<?php echo $data['etime']; ?>">
                                    <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['etime_err']; ?>
                                </span>
                            </div>
                            <div class="text-box">
                                <label>Remarks<span style="color:red"><sup>*</sup></span></label><br />
                                <textarea name="remarks" id="descript" cols="50" rows="5"
                                    value="<?php echo $data['remarks']; ?>">        
                          </textarea>
                          <span style="color:red; font-size:7px font-weight:bold">
                                    <?php echo $data['remarks_err']; ?>
                                </span>
                            </div>
                         

                            <div class="input-box">
                                <input type="Submit" value="Submit" class="input-submit">
                            </div>




                        </div>
                    </div>
                </div>
            </form>

            </main>
            </main>

        </div>

</body>

</html>