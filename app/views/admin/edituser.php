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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/regForm.css">

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
            <h1>Edit User </h1>

            <form method="post" action="<?php echo URLROOT; ?>admin/edituser/<?php echo $data['id']; ?>" class="form"
                enctype="multipart/form-data">

                <div class="input-box">
                    <label>Full Name<span style="color:red"><sup>*</sup></span></label>
                    <input type="text" placeholder="Enter full name" name="name" value="<?php echo $data['name']; ?>" />

                </div>

                <div class="input-box">
                    <label>Email Address<span style="color:red"><sup>*</sup></label>
                    <input type="text" placeholder="Enter email address" name="email"
                        value="<?php echo $data['email']; ?>" />

                </div>


                <div class="column">
                    <div class="input-box">
                        <label>Phone Number<span style="color:red"><sup>*</sup></label>
                        <input type="number" placeholder="Enter phone number" name="contact"
                            value="<?php echo $data['phone']; ?>" />

                    </div>

                </div>



                <div class="input-box address">
                    <label>Address<span style="color:red"><sup>*</sup></label>
                    <input type="text" placeholder="Enter address" name="address"
                        value="<?php echo $data['address']; ?>" />

                </div>
                <?php if ($data['role'] !== 'customer'): ?>
                    <div class="input-box">
                        <label>NIC<span style="color:red"><sup>*</sup></label>
                        <input type="text" placeholder="Enter NIC" name="nic" value="<?php echo $data['nic']; ?>" />

                    </div>

                    <div class="input-box address">
                        <label>Business Details<span style="color:red"><sup>*</sup></label>
                        <input type="text" name="bname" placeholder="Enter your Business name"
                            value="<?php echo $data['bname']; ?>" />

                        <input type="number" name="bno" placeholder="Enter Business Registration Number"
                            value="<?php echo $data['bno']; ?>" />
                    <?php endif; ?>

                    <input type='submit' class="btn" value="Update" onclick="confirmEdit()" />

            </form>


        </main>


    </div>

</body>
<script>
    function confirmEdit() {
        var confirmation = confirm("Are you sure you want to delete this request?");
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