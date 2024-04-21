<!DOCTYPE html>
<html lang="en">
    <?php
var_dump($data);
?>
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
    <style>
        .calendar1 {
            max-width: 100%;
            padding: 20px;
            background-color: #f9f9f9;
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            box-shadow: var(--box-shadow);
            transition: all 300ms ease;

        }


        .calendar1:hover {
            box-shadow: none;
        }

        .calendar1-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-size:30px;
        }

        #prev-month,
        #next-month {
            background-color: var(--color-primary);
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        #prev-month:hover,
        #next-month:hover {
            background-color: #0056b3;
        }

        #current-month-year {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0;
        }

        /* Calendar Table */
        .calendar-table1 {
            width: 100%;
            border-collapse: collapse;
        }

        .calendar-table1 th,
        .calendar-table1 td {
            text-align: center;
            width: 50px;
            height: 50px;
            padding: 50px;
            color: var(--color-primary-variant);
            font-size: 20px;
        }

        /* Highlight Current Date */
        .calendar-table1 td {
            background-color: #fff;
            font-size: 30px;
        }

        .calendar-table1 td:hover {
            background-color: var(--color-primary);
            color:var(--color-primary-variant);
        }

        /* Add styles for specific dates with events here */

        /* Empty Cells */
        .calendar-table1 td:empty {
            visibility: hidden;
        }
    </style>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarBody = document.getElementById('calendar-body1');
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

        });



    </script>

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

                <a href="<?php echo URLROOT ?>eventplanners/packages">
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

                <a href="<?php echo URLROOT ?>eventplanners/calendar" class="active">
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

        <main>


            <!-- Content start here -->
            <div>
                <div class="profile end">
                    <div class="info" style="padding-right:25px;">
                        <p>Hey, <b>Sunimal</b></p>
                        <small class="text-muted">Eventplanner</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?php echo URLROOT ?>public/images/photo2.jpg">
                    </div>
                </div>



                <!-- Heading and search bar -->


                <div class="planner-title">
                    <h1>Calendar</h1>

                </div>


                <div class="calendar1" style="margin:50px">
                    <div class="calendar1-header">
                        <button id="prev-month">Previous</button>
                        <h2 id="current-month-year">Month Year</h2>
                        <button id="next-month">Next</button>
                    </div>
                    <table class="calendar-table1">
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
                        <tbody id="calendar-body1" style="border-color:white">

                        </tbody>
                    </table>


                </div>




            </div>

</body>

</html>