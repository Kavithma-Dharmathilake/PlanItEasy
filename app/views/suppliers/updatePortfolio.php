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

                <a href="<?php echo URLROOT; ?>suppliers/portfolio">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Portfolio</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/quotationRequest">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Quotation Requests</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/packages">
                    <span class="material-icons-sharp">
                        request_quote
                    </span>
                    <h3>Packages</h3>
                </a>


                <a href="<?php echo URLROOT; ?>suppliers/calendar">
                    <span class="material-icons-sharp">
                        calendar_month
                    </span>
                    <h3>Calender</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/profile">
                    <span class="material-icons-sharp">
                        account_box
                    </span>
                    <h3>Profile</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">5</span>
                </a>
                <a href="">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        <!-- Content start here -->
        <div>


            <!-- Heading and search bar -->


            <div class="planner-title" style="padding-bottom:50px;">
                <h1>Update Your Portfolio</h1>
            </div>
            <form action="<?php echo URLROOT; ?>suppliers/updatePortfolio" method="POST" enctype="multipart/form-data">
                <div class="form-add-package">
                    <div class="form-wrapper">
                        <div class="form-heading">
                            <h2 style="padding: 20px;">Add Items</h2>
                        </div>
                        <div class="form-content">
                            <div class="text-box">
                                <label>Bio<span style="color:red"><sup>*</sup></span></label><br />
                                <textarea name="bio" id="descript" cols="50" rows="5"><?php echo $data['portfolio']->bio; ?>
                                </textarea>
                            </div>
                            <div class="text-box">
                                <label>Description<span style="color:red"><sup>*</sup></span></label><br />
                                <textarea name="description" id="descript" cols="50" rows="5"><?php echo $data['portfolio']->description; ?>
                                </textarea>
                            </div>
                            <div style="margin-left:1.5rem; margin-bottom:3rem;">
                            <label>Caption<span style="color:red"><sup>*</sup></span></label><br />
                                <input type="file" name="caption" accept="image/*" />
                            </div>
                            <div style="margin-left:1.5rem;  margin-bottom:3rem">
                            <label>Gallery Images (Select at least 10 images)<span style="color:red"><sup>*</sup></span></label><br />
                                <input type="file" name="images[]" accept="image/*" multiple />
                            </div>
                            <div style="margin-left:1.5rem">
                            <label>Quotation Documents(.pdf)<span style="color:red"><sup>*</sup></span></label><br />
                                <input type="file" name="document" accept="application/pdf" multiple />
                            </div>
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