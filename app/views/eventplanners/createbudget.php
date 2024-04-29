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
                        <h1>Create Budget</h1>


                    </div>


                </div>

                <!-- Event Request Table -->
                <div style="display:flex; flex-direction:row">
                    <div style="width:600px;margin:20px;">

                        <form action="#" method="post"
                            enctype="multipart/form-data">
                            <div class="form-add-package">
                                <div class="form-wrapper">
                                    <div class="form-heading">
                                        <h2 style="padding: 20px;">Budget Plan</h2>
                                    </div>

                                    <div class="form-content">

                                        <div class="event-details" style="width:600px;">
                                            <p style="text-align:center">General details</p>

                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Event Type </div>
                                                <div class="req-data" style="width:50%">Wedding</div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Event Theme </div>
                                                <div class="req-data" style="width:50%">Ocean</div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Tenative date </div>
                                                <div class="req-data" style="width:50%">2023/10/12</div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Budget </div>
                                                <div class="req-data" style="width:50%">100,000.00 LKR</div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Guest Count </div>
                                                <div class="req-data" style="width:50%">250</div>
                                            </div>
                                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                                <div class="req-title" style="width:50%">Time</div>
                                                <div class="req-data" style="width:50%">8.00 A.M. - 4.30 P.M.</div>
                                            </div>
                                        </div>
                                        <div class="event-details" style="width:600px;height:350px;">
                                            <p style="text-align:center">Photography</p>
                                            <div class="input-box">
                                                <label>Supplier Name</label><br />
                                                <input type="text" placeholder="CaptureX" name="name">
                                                <label>Charges</label><br />
                                                <input type="text" placeholder="RS.15000.00" name="name">

                                            </div>


                                        </div>

                                        <div class="event-details" style="width:600px;height:350px;">
                                            <p style="text-align:center">Reception</p>
                                            <div class="input-box">
                                                <label>Supplier Name</label><br />
                                                <input type="text" placeholder="SriMalee Grand Meridian" name="name">
                                                <label>Charges</label><br />
                                                <input type="text" placeholder="RS.150000.00" name="name">

                                            </div>


                                        </div>
                                        <div class="event-details" style="width:600px;">
                                            <p style="text-align:center">Total Charges</p>
                                            <div class="input-box">
                                                <label>Total</label><br />
                                                <input type="text" placeholder="RS.150000.00" name="name">

                                            </div>


                                        </div>




                                        <div class="input-box">
                                            <input type="Submit" value="Send To Customer" class="input-submit">
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div style="margin:30px;width:400px; margin-left:110px;">
                    <div class="event-request" style="margin-top:60px">
           
           <table>
               <thead>
                   <tr>
                       <th>Type</th>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Action</th>

                     
                   </tr>
               </thead>
               <tbody>
                 
                   <tr>
                       <td>Reception</td>
                       <td>Sri Malee</td>
                       <td>250,000.00<td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                       
                   </tr>
                   <tr>
                       <td>Deco</td>
                       <td>Lassana Flora</td>
                       <td>120,000.00</td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                      
                   </tr>
                   <tr>
                       <td>photo</td>
                       <td>CaptureX</td>
                       <td>250</td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                      
                   </tr>
                    <tr>
                       <td>catering</td>
                       <td>Roast Chicks</td>
                       <td>250,00.00</td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                   
                      
                      
                       
                   </tr>
                   <tr>
                       <td>Deco</td>
                       <td>Lassana Flora</td>
                       <td>120,000.00</td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                      
                   </tr>
                   <tr>
                       <td>photo</td>
                       <td>CaptureX</td>
                       <td>250</td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                      
                   </tr>
                    <tr>
                       <td>catering</td>
                       <td>Roast Chicks</td>
                       <td>250,00.00</td>
                       <td><button style="background-color:#7380ec; color:white; border-radius:15px; padding:10px;">ADD</button></td>
                   
                      
                      
                       
                   </tr>
                  
               </tbody>
           </table>
       </div>

                </div>
                </div>



            </div>

</body>

</html>