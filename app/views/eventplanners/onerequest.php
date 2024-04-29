<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event request</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

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
                    <h1>Event Request ID - <?php echo $data['quote']->eqid ?></h1>
                </div>


            </div>
            <div style="display:flex; margin-top:40px">
                <div>
                    <h2 style="text-align:center; margin-top:50px">General details</h2>
                    <div class="event-details">
                        <p style="text-align:center">Event details</p>

                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Event Type </div>
                            <div class="req-data" style="width:50%"><?php echo $data['quote']->event_type ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Event Theme </div>
                            <div class="req-data" style="width:50%"><?php echo $data['quote']->theme ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Tenative date </div>
                            <div class="req-data" style="width:50%"><?php echo $data['quote']->date ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Budget </div>
                            <div class="req-data" style="width:50%">LKR. <?php echo $data['quote']->minbudget ?> - LKR. <?php echo $data['quote']->maxbudget ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Guest Count </div>
                            <div class="req-data" style="width:50%"><?php echo $data['quote']->guest_count ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Time</div>
                            <div class="req-data" style="width:50%"><?php echo $data['quote']->starttime ?> - <?php echo $data['quote']->endtime ?></div>
                        </div>
                    </div>
                    <div class="event-details">

                        <p style="text-align:center;">Customer details</p>

                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Name </div>
                            <div class="req-data" style="width:50%"><?php echo $data['customer']->name ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Email </div>
                            <div class="req-data" style="width:50%"><?php echo $data['customer']->email ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Telephone </div>
                            <div class="req-data" style="width:50%"><?php echo $data['customer']->contact ?></div>
                        </div>
                        <a href="<?php echo URLROOT ?>eventplanners/message/<?php echo $data['quote']->eqid ?>"><button style="margin-left:15px;margin-top:50px; padding:20px; background-color:#7380ec; color:white; border-radius:15px;">Message With Customer</button></a>


                    </div>

                    <div>

                        <a href="<?php echo URLROOT ?>eventplanners/budget/<?php echo $data['quote']->gid ?>"><button style=" margin:20px; padding:20px; background-color:#7380ec; color:white; border-radius:15px;">Create Budget</button></a>
                    </div>
                </div>
                <div class="search-quoate">
                    <h2 style="text-align:center; margin-top:50px; margin-left:-330px;">Service Details</h2>
                    
                    <!-- reception -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['reception'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Reception Request</p>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Indoor/Outdoor</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['reception']->type ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remark</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['reception']->remark ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['reception']->start  ?>- <?php echo $data['reception']->end ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                               <a href="<?php echo URLROOT  ?>eventplanners/quotations/reception/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:15px;padding:20px">Quotations</button></a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/reception/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                
                    <!-- catering -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['catering'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Catering Request</p>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Meals</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['catering']->time ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Services</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['catering']->services ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Price Per Plate</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['catering']->price ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['catering']->start ?> - <?php echo $data['catering']->end ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['catering']->remark  ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                            <a href="<?php echo URLROOT  ?>eventplanners/quotations/catering/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:15px;padding:20px">Quotations</button></a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/catering/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Photography -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['photography'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Photography Request</p>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Coverage</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['photography']->coverage ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Services</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['photography']->services ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Price Per Plate</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['photography']->remark ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['photography']->start ?> - <?php echo $data['photography']->end ?></div>
                                </div>
                            

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                            <a href="<?php echo URLROOT  ?>eventplanners/quotations/photography/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:15px;padding:20px">Quotations</button></a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/Photographer/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Decoration -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['decoration'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Decoration Request</p>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Services</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['decoration']->services ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Flowers</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['decoration']->flowers ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['decoration']->remark  ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                            <a href="<?php echo URLROOT  ?>eventplanners/quotations/decoration/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:15px;padding:20px">Quotations</button></a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/Decorations/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Cake -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['cake'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Cake Request</p>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['cake']->remark  ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                                <a href="<?php echo URLROOT ?>eventplanners/quotations/Cake/<?php echo $data['quote']->eqid ?>"> <button style="margin-top:-100px; margin-left:15px;padding:20px">Quotations</button> </a> 
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/Cake/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Dancing -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['dancing'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Dancing Request</p>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['dancing']->start ?> - <?php echo $data['dancing']->end ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['dancing']->remark  ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                                <a href=""> Requested - 3</a> | <a href="<?php echo URLROOT ?>eventplanners/recivedquote">Receieved -2</a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/dancing/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Music -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['music'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">Music Request</p>

                               
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['music']->start ?> - <?php echo $data['music']->end ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['music']->remark  ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                                <a href=""> Requested - 3</a> | <a href="<?php echo URLROOT ?>eventplanners/recivedquote">Receieved -2</a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/music/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- DJ -->
                    <div style="display:flex; flex-direction:row">
                        <?php if ($data['dj'] != null) { ?>
                            <div class="event-details">
                                <p style="text-align:center">DJ Request</p>

                            
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Services</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['dj']->services ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Coverage</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['dj']->coverage ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['dj']->start ?> - <?php echo $data['dj']->end ?></div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['dj']->remark  ?></div>
                                </div>

                            </div>
                       
                        <div>
                            <p style="margin:20px; padding:20px; margin-top:100px;">
                                <a href=""> Requested - 3</a> | <a href="<?php echo URLROOT ?>eventplanners/recivedquote">Receieved -2</a>
                            </p>
                            <a href="<?php echo URLROOT ?>eventplanners/suppliers/dj/<?php echo $data['quote']->gid ?>"><button style="margin-top:-100px; margin-left:60px;padding:20px">Search Suppliers</button></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>




    </div>


</body>

</html>