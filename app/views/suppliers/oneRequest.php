<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event request</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">


    <style>
        .alert {
            padding: 20px;
            background-color: #7380ec;
            color: white;
            margin: 30px;
            margin-right: 70px;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>

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
                <a href="<?php echo URLROOT; ?>suppliers/index">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/portfolio">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Portfolio</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/quotationRequest" class="active">
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

                <a href="profile.php">
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
                <a href="<?php echo URLROOT; ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        <!-- Content start here -->
        <div>




            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1> Quotations Request - <?php echo  $data['event']->date  ?></h1>
                </div>


            </div>
            <div style="display:flex; margin-top:40px">
                <div>
                    <h2 style="text-align:center; margin-top:50px">General details</h2>
                    <div class="event-details">
                        <p style="text-align:center">Event details</p>

                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Event Type </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->event_type  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Event Theme </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->theme  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Tenative date </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->date  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Time</div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->starttime  ?> - <?php echo  $data['event']->endtime  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Location</div>
                            <div class="req-data" style="width:50%"><?php echo  $data['event']->location  ?></div>
                        </div>
                    </div>
                    <div class="event-details">

                        <p style="text-align:center;">Customer Details</p>

                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Name </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['customer']->name  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Email </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['customer']->email  ?></div>
                        </div>
                        <div style="display:flex; margin-top:20px; margin-left:30px;">
                            <div class="req-title" style="width:50%">Telephone </div>
                            <div class="req-data" style="width:50%"><?php echo  $data['customer']->contact  ?></div>
                        </div>
                        <a href="<?php echo URLROOT ?>suppliers/message/<?php echo $data['request']->id ?>">
                            <Button style="margin-left:70px;margin-top:25px;padding:10px; background-color:cornflowerblue;border-radius:15px;">Message With Customer</Button>
                        </a>
                        </d>
                    </div>
                </div>

                
                <div class="search-quoate">
                    <h2 style="text-align:center; margin-top:50px; margin-left:-330px;">Service Details</h2>
                    <?php if ($data['available'] != null) {
                        $str = "You have an Event on this Day";
                    } else {
                        $str = "You don't have any Event on this Day";
                    }
                    ?>


                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <strong>Alert! <?php echo $str ?></strong>
                    </div>
                    <div style="display:flex; flex-direction:row">
                        <div class="event-details" style="width:700px;">
                            <p style="text-align:center">Requested Quotation</p>



                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Package</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->package  ?> - (LKR. <?php echo  $data['request']->price ?>)</div>
                            </div>

                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Customer Remarks</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->remarks  ?></div>
                            </div>
                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Service Duration</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->stime  ?> to <?php echo  $data['request']->etime  ?> </div>
                            </div>
                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Additional Services</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->additional_services ?> </div>
                            </div>
                            <?php if ($data['request']->stype == 'decoration') : ?>
                                <!-- Display types of flowers for decoration -->
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Types of Flowers</div>
                                    <div class="req-data" style="width:50%"><?php echo $data['request']->flowers; ?></div>
                                </div>
                            <?php endif; ?>

                            <?php if ($data['request']->stype == 'catering') : ?>

                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Time </div>
                                    <div class="req-data" style="width:50%"><?php echo $data['request']->time; ?></div>
                                </div>
                            <?php endif; ?>
                            <div style="display:flex; margin-top:20px; margin-left:30px;">
                                <div class="req-title" style="width:50%">Quotation Status</div>
                                <div class="req-data" style="width:50%"><?php echo  $data['request']->q_status  ?></div>
                            </div>

                            <?php
                            $disabled = ($data['request']->q_status !== 'Pending') ? 'disabled' : '';

                            ?>
                            <form action="<?php echo URLROOT ?>suppliers/oneRequest/<?php echo $data['request']->id ?>" method="post">
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Final Charge</div>
                                    <div class="req-data" style="width:10%">
                                        <input type="number" value="<?php echo  $data['request']->r_price ?>" name="r_price" style="padding:7px;border-radius:5px;" <?php echo $disabled; ?>>
                                    </div>
                                </div>
                                <div style="display:flex; margin-top:20px; margin-left:30px;">
                                    <div class="req-title" style="width:50%">Remarks for the Customer</div>
                                    <div class="req-data" style="width:10%">
                                        <textarea id="remark" cols="30" rows="5" name="remark" <?php echo $disabled; ?>>  <?php echo $data['request']->s_remark ?>  </textarea>
                                    </div>
                                </div>


                                <input name="accept" type="submit" value="Accept" style="margin-left:150px; padding:1rem" <?php echo $disabled; ?> />
                                <input name="decline" type="submit" style="margin-left:150px; padding:1rem" value="Decline" <?php echo $disabled; ?> />

                            </form>

                        </div>

                    </div>





                </div>
            </div>

        </div>




    </div>

    <script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
    <script>
        function generatePDF(){
            var pdfObject = jsPDFInvoiceTemplate.default(props);

            console.log("object created :", pdfObject);
        }

        var props = {
    outputType: jsPDFInvoiceTemplate.OutputType.Save,
    returnJsPDFDocObject: true,
    fileName: "Invoice 2021",
    orientationLandscape: false,
    compress: true,
    logo: {
        src: "https://raw.githubusercontent.com/edisonneza/jspdf-invoice-template/demo/images/logo.png",
        type: 'PNG', //optional, when src= data:uri (nodejs case)
        width: 53.33, //aspect ratio = width/height
        height: 26.66,
        margin: {
            top: 0, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
    },
    stamp: {
        inAllPages: true, //by default = false, just in the last page
        src: "https://raw.githubusercontent.com/edisonneza/jspdf-invoice-template/demo/images/qr_code.jpg",
        type: 'JPG', //optional, when src= data:uri (nodejs case)
        width: 20, //aspect ratio = width/height
        height: 20,
        margin: {
            top: 0, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
    },
    business: {
        name: "Business Name",
        address: "Albania, Tirane ish-Dogana, Durres 2001",
        phone: "(+355) 069 11 11 111",
        email: "email@example.com",
        email_1: "info@example.al",
        website: "www.example.al",
    },
    contact: {
        label: "Invoice issued for:",
        name: "Client Name",
        address: "Albania, Tirane, Astir",
        phone: "(+355) 069 22 22 222",
        email: "client@website.al",
        otherInfo: "www.website.al",
    },
    invoice: {
        label: "Invoice #: ",
        num: 19,
        invDate: "Payment Date: 01/01/2021 18:12",
        invGenDate: "Invoice Date: 02/02/2021 10:17",
        headerBorder: false,
        tableBodyBorder: false,
        header: [
          {
            title: "#", 
            style: { 
              width: 10 
            } 
          }, 
          { 
            title: "Title",
            style: {
              width: 30
            } 
          }, 
          { 
            title: "Description",
            style: {
              width: 80
            } 
          }, 
          { title: "Price"},
          { title: "Quantity"},
          { title: "Unit"},
          { title: "Total"}
        ],
        table: Array.from(Array(2), (item, index)=>([
            index + 1,
            "There are many variations ",
            "Testings ",
            200.5,
            4.5,
            "m2",
            400.5
        ])),
        additionalRows: [{
            col1: 'Total:',
            col2: '145,250.50',
            col3: 'ALL',
            style: {
                fontSize: 14 //optional, default 12
            }
        },
        {
            col1: 'VAT:',
            col2: '20',
            col3: '%',
            style: {
                fontSize: 10 //optional, default 12
            }
        },
        {
            col1: 'SubTotal:',
            col2: '116,199.90',
            col3: 'ALL',
            style: {
                fontSize: 10 //optional, default 12
            }
        }],
        invDescLabel: "Invoice Note",
        invDesc: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.",
    },
    footer: {
        text: "The invoice is created on a computer and is valid without the signature and stamp.",
    },
    pageEnable: true,
    pageLabel: "Page ",
};

    </script>
</body>

</html>