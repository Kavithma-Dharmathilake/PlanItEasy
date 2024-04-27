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

USELESS RIGHT???
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
                <a href="<?php echo URLROOT; ?>user/logout">
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
                <h1>Sent Quotations</h1>
            </div>
            <main>
                <div style="margin:20px; padding:20px">
                    <button style="margin:10px; padding:10px; background-color:#7380ec; color:white; border-radius:10px;">Photography</button>
                    <button style="margin:10px; padding:10px; background-color:#7380ec; color:white; border-radius:10px;">Catering</button>
                    <button style="margin:10px; padding:10px; background-color:#7380ec; color:white; border-radius:10px;">Recepetion</button>
                    <button style="margin:10px; padding:10px; background-color:#7380ec; color:white; border-radius:10px;">Decoration</button>
                    <button style="margin:10px; padding:10px; background-color:#7380ec; color:white; border-radius:10px;">Event Planing</button>
                </div>
                <div class="recent-trans">
                    <table>
                        <thead>
                            <tr>
                                <th>Quote ID</th>
                                <th>Supplier Name</th>
                                <th>Tentative Date</th>
                                <th>Start Time</th>
                                <th>End  Time</th>
                                <th>Status</th>
                                <th>Remarks</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $i ): ?>
                            <tr>
                                <td>#Q<?php echo $i->id ?></td>
                                <td><?php echo $i->name ?></td>
                                <td><?php echo $i->date ?></td>
                                <td><?php echo $i->stime ?></td>
                                <td><?php echo $i->etime ?></td>
                                <td><?php echo $i->status ?></td>
                                <td><?php echo $i->remarks ?></td>
                                <td><a href="<?php echo URLROOT ?>customers/editquote/<?php echo $i->id ?>"><button class="btn_accept" type="button">Update</button></a></td>
                                <td><a href="<?php echo URLROOT ?>customers/deleteuser/<?php echo $i->id ?>"><button class="btn_reject" type="button" onclick="confirmDelete(<?php echo $i->id ?>)">Delete</button></a></td>
                            </tr>
                            <?php endforeach ?>
                           
                        </tbody>
                    </table>
                </div>
            </main>
            </main>

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