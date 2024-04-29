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
       
            <!-- Heading and search bar -->


            <div class="planner-title" style="padding-bottom:50px;">
                <h1>Packages and Services</h1>
            </div>
            <form action="<?php echo URLROOT; ?>eventplanners/updatePackage/<?php echo $data['id']; ?>" method="post">
    <div class="form-add-package">
        <div class="form-wrapper">
            <div class="form-heading">
                <h2 style="padding: 20px;">Update Package</h2>
            </div>
            <div class="form-content">
                <div class="input-box">
                    <label>Package Name<span style="color:red"><sup>*</sup></span></label><br />
                    <input type="text" placeholder="Product Name" name="name" value="<?php echo $data['name']; ?>">
                </div>
                <div class="input-box">
                    <label>Price<span style="color:red"><sup>*</sup></span></label><br />
                    <input type="number" placeholder="Price" name="price" min="0" value="<?php echo $data['price']; ?>">
                </div>
                <div class="text-box">
                    <label>Description<span style="color:red"><sup>*</sup></span></label><br />
                    <textarea name="description" id="descript" cols="50" rows="5"><?php echo htmlspecialchars($data['description']); ?></textarea>
                </div>
                <div class="text-box">
                    <label>Services You offer<span style="color:red"><sup>*</sup></span></label><br />
                    <textarea name="services" id="services" cols="50" rows="5"><?php echo htmlspecialchars($data['services']); ?></textarea>
                </div>

                <div class="input-box">
                    <input type="Submit" value="Update" class="input-submit">
                </div>

            </div>
        </div>
    </div>
</form>




</body>
<script>
    function confirmEdit() {
        var confirmation = confirm("Are you sure you want to Edit this request?");
        if (confirmation) {
            acceptRequest();
        } else {

        }
    }

    function acceptRequest() {
        alert('User has been edited.');

    }
</script>

</html>