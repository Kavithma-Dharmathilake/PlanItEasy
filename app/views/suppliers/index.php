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
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admindash.css">
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

                <a href="<?php echo URLROOT; ?>suppliers/products">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Products</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/quotationRequest">
                    <span class="material-icons-sharp">
                        note_add
                    </span>
                    <h3>Quotation Requests</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/sentRequests">
                    <span class="material-icons-sharp">
                        festival
                    </span>
                    <h3>Sent Quotations</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/newProjectReq">
                    <span class="material-icons-sharp">
                        request_quote
                    </span>
                    <h3>New Project Requests</h3>
                </a>
                <a href="<?php echo URLROOT; ?>suppliers/completedProjects">
                    <span class="material-icons-sharp">
                        paid
                    </span>
                    <h3>Completed Projects</h3>
                </a>

                <a href="<?php echo URLROOT; ?>suppliers/eventplanners/calendar">
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

                <a href="<?php echo URLROOT; ?>suppliers/eventplanners/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">5</span>
                </a>

                <!-- <a href="eventplanners/inquiry">
                    <span class="material-icons-sharp">
                        info
                    </span>
                    <h3>Inquiry</h3>
                </a> -->
                <a href="">
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
                            <h3>New Quotation Requests</h3>
                            <h1>3</h1>
                        </div>

                    </div>
                </div>

<!-- <i class="fa-solid fa-file-invoice"></i> -->
                <div class="eventplanners">
                    <span class="material-icons-sharp">inventory</span>
                    <div class="middle">
                        <div class="left">
                            <h3>New Project Requests</h3>
                            <h1>5</h1>
                        </div>

                    </div>
                </div>

                <div class="suppliers">
                    <span class="material-icons-sharp">groups</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Products Listed</h3>
                            <h1>51</h1>
                        </div>

                    </div>

                </div>

            </div>
            <div class="recent-trans">
                <h2>Event Completed</h2>
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
                        <p>Hey, <b>Abhi</b></p>
                        <small class="text-muted">Supplier</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/photo1.jpg">
                    </div>
                </div>
            </div>
            <!-- End of top-->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/photo2.jpg">
                        </div>
                        <div class="message">
                            <p><b>Chamod Deshan</b> Sent a quotation Request</p>
                            <small class="text-muted">10 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/photo2.jpg">
                        </div>
                        <div class="message">
                            <p><b>Nisal Abeyweera</b> Sent a quotation request</p>
                            <small class="text-muted">1 Day Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/photo2.jpg">
                        </div>
                        <div class="message">
                            <p><b>Hasith Perera</b> Sent a quotation</p>
                            <small class="text-muted">2 Days Ago</small>
                        </div>
                    </div>
                </div>
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