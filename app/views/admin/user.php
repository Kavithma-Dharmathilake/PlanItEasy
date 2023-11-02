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
                <a href="<?php echo URLROOT ?>admin/user" class="active">
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
            <h1>Users</h1>


            <!------------End of insights------------>
            <div class="recent-trans">
                <h2></h2>
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>User Role</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>NIC</th>
                            <th>Email</th>
                            <th>Business Name</th>
                            <th>Business Number</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $i): ?>
                            <tr>
                                <td>
                                    <?php echo $i->id ?>
                                    </th>
                                <td>
                                    <?php echo $i->name ?>
                                    </th>
                                <td>
                                    <?php echo $i->role ?>
                                    </th>
                                <td>
                                    <?php echo $i->contact ?>
                                    </th>
                                <td>
                                    <?php echo $i->address ?>
                                    </th>
                                <td>
                                    <?php echo $i->nic ?>
                                    </th>
                                <td>
                                    <?php echo $i->email ?>
                                    </th>
                                <td>
                                    <?php echo $i->bname ?>
                                    </th>
                                <td>
                                    <?php echo $i->bno ?>
                                    </th>
                                <td> <a href="<?php echo URLROOT ?>admin/edituser/<?php echo $i->id ?>"><button
                                            class="btn_accept" type="button">Edit</button></a></th>
                                <td>
                                    <a href="<?php echo URLROOT ?>admin/deleteuser/<?php echo $i->id ?>"><button
                                            class="btn_accept" type="button"
                                            onclick="confirmDelete(<?php echo $i->id ?>)">Delete</button></a>
                                    </th>

                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>

            </div>
        </main>
        <!--------------END OF MAIN-------------->

    </div>

</body>
<script>
    function confirmDelete(requestId) {
        var confirmation = confirm("Are you sure you want to Delete?");
        if (confirmation) {
            deleteReq(requestId);
        } else {

        }
    }

    function deleteReq(requestId) {
        alert('User #' + requestId + ' has been deleted.');

    }

    function confirmReject(requestId) {
        var confirmation = confirm("Are you sure you want to reject this request?");
        if (confirmation) {
            rejectRequest(requestId);
        } else {

        }
    }

    function rejectRequest(requestId) {
        alert('Request #' + requestId + ' has been reject.');
    }
</script>


</html>