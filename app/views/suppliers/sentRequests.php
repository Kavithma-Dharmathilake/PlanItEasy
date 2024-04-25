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
                <a href="<?php echo URLROOT; ?>users/logout">
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
                    <p>Hey, <b>Abhi</b></p>
                    <small class="text-muted">Supplier</small>
                </div>
                <div class="profile-photo">
                    <img src="images/photo1.jpg">
                </div>
            </div>



            <!-- Heading and search bar -->
            <div style="display:flex">

                <div class="planner-title">
                    <h1>Sent Quotation Requests</h1>


                </div>
                <div class="planner-search">
                    <form action="#" method="post">

                        <input type="search" id="query" name="q" placeholder="       Search Quotation Requests"
                            class="planner-textbox">

                        <button>
                            <i class="fa fa-search" style="font-size: 18px;">
                            </i>
                        </button>
                    </form>
                </div>

            </div>

            <!-- Event Request Table -->
            <div class="event-request" style="margin-top:60px">
           
                <table>
                    <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event type</th>
                            <th>Number of Guests</th>
                            <th>Budget</th>
                            <th>Tentative Date</th>
                            <th>Event Status</th>
                            <th>More</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $i): ?>
                        <tr>
                            <td><?php echo $i->id ?></td>
                            <td><?php echo $i->package ?></td>
                            <td><?php echo $i->eid ?></td>
                            <td><?php echo $i->sid ?></td>
                            <td><?php echo $i->uid ?></td>
                            <td><?php echo $i->stime ?></td>
                            <td><a href="eventplanners/onerequest"><i class="fa-solid fa-angles-right"></i></a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>



        </div>
                    </br>
                    </br>
                    </br>
        <div>
        <button onclick="captureAndDownloadPDF()">Generate Report</button>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>

<script>
    async function captureAndDownloadPDF() {
        // Capture screenshot using html2canvas
        const canvas = await html2canvas(document.body); // or a specific element

        // Get the image data from the canvas
        const imgData = canvas.toDataURL('image/png');

        // Create a new instance of jsPDF
        const {
            jsPDF
        } = window.jspdf;
        const doc = new jsPDF();

        // Add the image to the PDF (x, y, width, height)
        doc.addImage(imgData, 'PNG', -5, 1, 190, 0);

        // Save the PDF and prompt the user to download it
        doc.save('screenshot.pdf');
    }

    // Call the function when needed (e.g., on button click)
    document.getElementById('downloadButton').addEventListener('click', captureAndDownloadPDF);
</script>

</body>

</html>

