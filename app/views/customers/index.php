<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarBody = document.getElementById('calendar-body');
            const currentMonthYear = document.getElementById('current-month-year');
            const prevMonthButton = document.getElementById('prev-month');
            const nextMonthButton = document.getElementById('next-month');

            let currentDate = new Date();

            // Function to generate the calendar for the current month
            function generateCalendar() {
                const year = currentDate.getFullYear();
                const month = currentDate.getMonth();
                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const daysInMonth = lastDay.getDate();
                const startingDay = firstDay.getDay();

                // Clear the previous month's calendar
                calendarBody.innerHTML = '';

                // Set the current month and year in the header
                currentMonthYear.textContent = new Date(year, month).toLocaleDateString('en-US', { year: 'numeric', month: 'long' });

                // Generate calendar cells
                let date = 1;
                for (let i = 0; i < 6; i++) {
                    const row = document.createElement('tr');
                    for (let j = 0; j < 7; j++) {
                        const cell = document.createElement('td');
                        if (i === 0 && j < startingDay) {
                            // Empty cells before the start of the month
                            cell.textContent = '';
                        } else if (date > daysInMonth) {
                            // Empty cells after the end of the month
                            cell.textContent = '';
                        } else {
                            cell.textContent = date;
                            date++;
                        }
                        row.appendChild(cell);
                    }
                    calendarBody.appendChild(row);
                }
            }

            // Initial calendar generation
            generateCalendar();

            // Event listeners for changing months
            prevMonthButton.addEventListener('click', function () {
                currentDate.setMonth(currentDate.getMonth() - 1);
                generateCalendar();
            });

            nextMonthButton.addEventListener('click', function () {
                currentDate.setMonth(currentDate.getMonth() + 1);
                generateCalendar();
            });


            // Generate random data
            const data = [];
            const labels = ["Januray", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December"];

            for (let i = 0; i < 12; i++) {
                data.push(Math.floor(Math.random() * 15)); // Generate random data values between 0 and 100
               
            }

            // Create a bar chart
            const ctx = document.getElementById('barChart').getContext('2d');
            const barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Quotation Requests sent per month',
                        data: data,
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
    <div class="dash-container">
        <aside>

            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/events">
                    <span class="material-icons-sharp">man</span>
                    <h3>Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT ?>customers/inquiry">
                    <span class="material-icons-sharp">info</span>
                    <h3>Inquiry</h3>
                </a>
                <!-- <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a> -->
                <!-- <a href="<?php echo URLROOT; ?>customers/viewquote">
                    <span class="material-icons-sharp"> note_add</span>
                    <h3>supplier quotation</h3>
                </a> -->
                <a href="<?php echo URLROOT; ?>customers/profile">
                    <span class="material-icons-sharp">person</span>
                    <h3>profile</h3>
                </a>
                <a href="<?php echo URLROOT; ?>user/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>


        </aside>



        <!-- Content start here -->
        <div>
            <div class="profile end">
                <div class="info" style="padding-right:25px;">
                    <p>Hey, <b><?php echo $_SESSION['user_name']?></b></p>
                    <small class="text-muted"><?php echo $_SESSION['user_role']?></small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo URLROOT ?>public/images/user.svg">
                </div>
            </div>

            <!-- Heading and search bar -->

            <main>
            <h1>Dashboard</h1>

            <div class="insights">
                <div class="users">
                    <span style="background-color:#f38e62" , class="material-icons-sharp">festival</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pending Events</h3>
                            <h1><?php echo $data['pending_count']; ?></h1>
                        </div>

                    </div>
                </div>

                <div class="eventplanners">
                    <span style="background-color:#f3db62", class="material-icons-sharp">inventory</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Booked Events</h3>
                            <h1><?php echo $data['booked_count']; ?></h1>
                        </div>

                    </div>
                    
                </div>


                <div class="suppliers">
                    <span style="background-color:#AFE1AF", class="material-icons-sharp">groups</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Completed Events</h3>
                            <h1><?php echo $data['completed_count']; ?></h1>
                        </div>

                    </div>

                </div>

            </div>
            <div class="recent-trans">
                <h2>Your Ongoing Events</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event Type</th>
                            <th>Tentative Date</th>
                            <th>Event Status</th>
                            <th>Action</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data['events'] as $event) : ?>

                            <tr>
                                <td><?php echo $event->id; ?></td>
                                <td> <?php echo $event->event_type; ?> </td>
                                <td><?php echo $event->date; ?> </td>
                                <td><?php echo $event->event_status; ?> </td>
                                <td>
                                    <form action="<?php echo URLROOT ?>customers/deleteevent/<?php echo $event->id;?>" method="post">
                                        <input type="hidden" name="delete_event" value="1">
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="<?php echo URLROOT ?>customers/oneevent/<?php echo $event->id; ?>">
                                        <span class="material-icons-sharp">

                                            expand_circle_down

                                        </span>
                                    </a>
                                </td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <!------------End of insights------------>

        </main>

        
    </div>
    <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
               
            </div>
            <!-- End of top-->
            <div class="recent-updates">

                <h2>Recent Updates</h2>
                <?php if ($data['recent']) {

                    foreach ($data['recent'] as $recent) {
                        ?>
                        <div class="updates">
                            <div class="update">
                                <div class="recent-icon">
                                    <span class="material-icons-sharp">person</span>
                                </div>
                                <div class="message">
                                    <p><b> <?php echo $recent->name; ?> </b> Accepted your Quotation Request</p>
                                    <small class="text-muted">recent quotations</small>
                                    <!-- <button class="btn">View Quotation</button> -->
                                </div>
                            </div>
                        </div>
                
                <?php
    } 
} ?>
            </div>

            <!------------ END OF RECENT UPDTAES ------------>
            <div class="analytics">
                <h2>Calander</h2>
                <div class="calendar">
                    <div class="calendar-header">
                        <button id="prev-month">Previous</button>
                        <h2 id="current-month-year">Month Year</h2>
                        <button id="next-month">Next</button>
                    </div>
                    <table class="calendar-table">
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                            <!-- Calendar cells will be dynamically generated here -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>

</body>

</html>