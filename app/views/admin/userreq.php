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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/requests.css">
</head>

<body>

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
                    <a href="<?php echo URLROOT ?>admin/userreq" class="active">
                        <span class="material-icons-sharp">analytics</span>
                        <h3>User Requests</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">settings</span>
                        <h3>Settings</h3>
                    </a>
                    <a href="<?php echo URLROOT ?>admin/userreq">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>

            <main>

                <h1>User Requests</h1>

                <div class="userRequest_table">
                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>User Name</th>
                                <th>E-mail</th>
                                <th>Business Name</th>
                                <th>Business Type</th>
                                <th>BR Number</th>
                                <th>Proof Document</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $i) : ?>
                                <tr>

                                    <td>#RQ
                                        <?php echo $i->id ?>
                                    </td>
                                    <td>
                                        <?php echo $i->name ?>
                                    </td>
                                    <td>
                                        <?php echo $i->email ?>
                                    </td>
                                    <td>
                                        <?php echo $i->bname ?>
                                    </td>
                                    <td>
                                        <?php echo $i->stype ?>
                                    </td>
                                    <td>
                                        <?php echo $i->bno ?>
                                    </td>
                                    <td> <a href="<?php echo URLROOT ?><?php echo $i->proof ?>" target="_blank">View Image
                                            <!-- <img src="<?php echo URLROOT ?><?php echo $i->proof ?>" alt="Image"> -->
                                        </a></button>
                                    </td>
                                    <td>
                                        <a href="<?php echo URLROOT ?>admin/accept/<?php echo $i->id ?>"><button class="btn_accept" type="button" onclick="confirmAccept(<?php echo $i->id ?>)">Accept</button></a>
                                    </td>
                                    <td>
                                        <button class="btn_reject" type="button" onclick="confirmReject(<?php echo $i->id ?>)">Reject</button>
                                    </td>

                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>




        </div>
        </main>
        </div>

    </body>
    <script>
        function confirmAccept(requestId) {
            var confirmation = confirm("Are you sure you want to accept this request?");
            if (confirmation) {
                acceptRequest(requestId);
            } else {

            }
        }

        function acceptRequest(requestId) {
            alert('Request #' + requestId + ' has been accepted.');

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