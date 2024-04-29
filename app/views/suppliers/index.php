<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
                  
            const quotePerMonth = <?php echo json_encode(array_column( $data['quotePerMonth'],'month_count')); ?>;

            const labels = ["Januray", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December"];

            // Create a bar chart
            const ctx = document.getElementById('barChart').getContext('2d');
            const barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Quotation Requests Recieved Per Month',
                        data: quotePerMonth,
                        backgroundColor: '#011f4b',
                        borderWidth: 1,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
</script>
</head>

<body>
    <!-- <?php var_dump($data['calaendarDates']);?> -->
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

                <a href="<?php echo URLROOT; ?>suppliers/message">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Messages</h3>
                    
                </a>
                <a href="<?php echo URLROOT; ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Dashboard</h1>
            <div class="insights">
                <div class="users">
                    <span class="material-icons-sharp">festival</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pending Requests</h3>
                            <h1>
                                    <?php echo $data['countQuote']->Count ?><br>
                            </h1>
                        </div>

                    </div>
                </div>

                <!-- <i class="fa-solid fa-file-invoice"></i> -->
                <div class="eventplanners">
                    <span class="material-icons-sharp">inventory</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Accepted Requests</h3>
                            <h1>
                            <?php echo $data['countAccepted']->Count ?><br>
                            </h1>
                        </div>

                    </div>
                </div>

                <div class="suppliers" style="cursor: pointer;">
                <a href = "<?php echo URLROOT; ?>suppliers/packages"> 
                    <span class="material-icons-sharp">groups</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Packages Listed</h3>
                            <h1>
                                    <?php echo $data['countProduct']->Count ?><br>
                            </h1>
                        </div>

                    </div>
                </a>
                </div>

            </div>
            <div class="recent-trans">
                <h2>Quotation Requests Recieved Per Month</h2>
                <canvas id="barChart"></canvas>

            </div>
            <!------------End of insights------------>

        </main>
        <!--------------END OF MAIN-------------->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo $data['userName']?></b></p>
                        <small class="text-muted">Supplier</small>
                    </div>
                    <div class="profile-photo">
                    <!-- <img src="<?php echo URLROOT; ?>public/images/photo1.jpg"> -->
                    </div>  
                </div>
            </div>
            <!-- End of top-->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    
                <?php foreach($data['recentQuotes'] as $update): ?>

                    <div class="update">
                        <div class="profile-photo">
                            <!-- <img src="images/photo2.jpg"> -->
                        </div>
                        <div class="message">
                            <p><b></b> Sent a quotation Request</p>
                            <small class="text-muted">10 Minutes Ago</small>
                        </div>
                    </div>
                    
                <?php endforeach; ?>    
                   
                </div>
            </div>

            <!------------ END OF RECENT UPDTAES ------------>
            <div class="analytics">
                <div id='calendar'></div>
            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 400,
            events: '<?php echo URLROOT; ?>suppliers/getCalendarEvents',

        });

        calendar.render();
    });

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    btn.onclick = function() {
        modal.style.display = "block";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>



<!-- 
<script>
        // Data for the bar chart
        var menuItems = <?php echo json_encode(array_column($data['bestsellingtop5menuitems'], 'itemName')); ?>;
        var quantities = <?php echo json_encode(array_column($data['bestsellingtop5menuitems'], 'total_quantity')); ?>;

        // Bar chart configuration
        var ctx = document.getElementById('best-selling-chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: menuItems,
                datasets: [{
                    label: 'Quantity Sold',
                    data: quantities,
                    backgroundColor: '#4caf50', // Green color
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var packageNames = <?php echo json_encode(array_column($data['gettotalpackageusage'], 'packageName')); ?>;
        var packageUsages = <?php echo json_encode(array_column($data['gettotalpackageusage'], 'total_usage')); ?>;

        // Pie chart configuration
        var pieCtx = document.getElementById('total-package-chart').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: packageNames,
                datasets: [{
                    label: 'Package Usage',
                    data: packageUsages,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // Colors for the pie slices
                    borderWidth: 1
                }]
            },
            options: {}
        });
    </script> -->