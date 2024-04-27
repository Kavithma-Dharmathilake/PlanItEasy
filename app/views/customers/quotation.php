<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/one.css">
</head>

<body>
    <!-- <div class="dash-container">
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
                <a href="<?php echo URLROOT; ?>customers/viewquote">
                    <span class="material-icons-sharp"> note_add</span>
                    <h3>supplier quotation</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile">
                    <span class="material-icons-sharp">person</span>
                    <h3>Profile</h3>
                </a>
              
                <a href="<?php echo URLROOT; ?>user/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <!-- Content start here -->
        <!-- <div>
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

            <!-- <div class="planner-title" style="padding-bottom:50px;">
                <h1>Dashboard</h1>
            </div> -->
            <!-- <main>
                <div class="quotation">
                    <form class="quote_form" method="POST">
                        <h4>GENERAL</h4>
                        <div class="general">
                            <!-- Event Type -->
                            <div class="input_box">
                                <label class="label flex-row">Event Type
                                    <div class="error">&nbsp;*</div>
                                </label>
                                <select name="event-type" id="event-type">
                                    <option value="Birthday">Birthday</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Anniversary">Anniversary</option>
                                    <!-- Add other event types here -->
                                </select>
                            </div>

                            <!-- Number of Participants -->
                            <div class="input_box">
                                <label class="label flex-row">Number of Participants
                                    <div class="error">&nbsp;*</div>
                                </label>
                                <input type="number" name="no-pax" required />
                            </div>

                            <!-- Theme -->
                            <div class "input_box">
                                <label class="label flex-row">Theme
                                    <div class="error">&nbsp;*</div>
                                </label>
                                <input type="text" name="theme" required />
                            </div>

                            <!-- Tentative Date -->
                            <div class="flex-row">
                                <div class="input_box">
                                    <label class="label flex-row">Tentative Date
                                        <div class="error">&nbsp;*</div>
                                    </label>
                                    <div class="date">
                                        <label>From</label>
                                        <input type="date" name="from-date" required />
                                        <label>To</label>
                                        <input type="date" name="to-date" required />
                                    </div>
                                </div>

                                <!-- Budget -->
                                <div class="input_box">
                                    <label class="label flex-row">Budget
                                      
                                    </label>
                                    <div class="date">
                                        <label>Min</label>
                                        <input type="number" name="min-budget" required />
                                        <label>Max</label>
                                        <input type="number" name="max-budget" required />
                                    </div>
                                </div>
                            </div>

                            <!-- Time -->
                            <div class="input_box">
                                <label class="label flex-row">Time
                                    <div class="error">&nbsp;*</div>
                                </label>
                                <div class="time">
                                    <label>From</label>
                                    <input type="time" name="from-time" required />
                                    <label>To</label>
                                    <input type="time" name="to-time" required />
                                </div>
                            </div>
                        </div>

                        <h4>EVENT DETAILS</h4>
                        <p>Please select the needed services</p>

                        <div class="venue">
                            <div class="flex-row-sb v">
                                <label class="label">Venue</label>
                                <div class="radio-btns">
                                    <input type="radio" id="venue_needed" name="venue" class="venue_needed"
                                        value="Venue Needed" />
                                </div>
                                <div class="dropdown">
                                    <button onclick="showDropdown('venue_dropdown1')" class="dropbtn">
                                        Need
                                    </button>
                                    <div id="venue_dropdown1" class="dropdown-content">
                                        <a>Indoor</a><br />
                                        <a>Outdoor</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button onclick="showDropdown('venue_dropdown2')" class="dropbtn">
                                        Not Need
                                    </button>
                                </div>
                            </div>

                            <div class="input_box">
                                <div class="venue_details">
                                    <div class="venue-radiobtns"></div>
                                </div>
                            </div>

                            <div class="venue_remarks">
                                <label class="label">Remarks</label>
                                <textarea class="txt_remarks" rows="4" cols="20" name="venue_remarks_text"
                                    placeholder="Any remarks regarding the 'Other' options chosen"></textarea>
                            </div>
                        </div>
                        <!--photography and vediography-->

                        <div class="venue">
                            <div class="flex-row-sb v">
                                <label class="label">Photography and Videography</label>
                                <div class="radio-btns">
                                    <input type="radio" id="photography_needed" name="photography"
                                        class="photography_needed" value="Photography Needed" />
                                </div>
                                <!-- Add two buttons with dropdowns here -->
                                <div class="custom-gap">
                                    <div class="dropdown">
                                        <button onclick="showDropdown('photography_dropdown1')" class="dropbtn">
                                            Need
                                        </button>
                                        <div id="photography_dropdown1" class="dropdown-content"></div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button onclick="showDropdown('photography_dropdown2')" class="dropbtn">
                                        Not Need
                                    </button>
                                </div>
                            </div>

                            <div class="input_box">
                                <div class="venue_details">
                                    <div class="venue-radiobtns"></div>
                                    <!-- Add venue images and remarks here -->
                                </div>
                            </div>

                            <!-- Remarks input field for Venue -->
                            <div class="venue_remarks">
                                <label class="label">Remarks</label>
                                <textarea class="txt_remarks" rows="4" cols="20" name="venue_remarks_text"
                                    placeholder="Any remarks regarding the 'Other' options chosen"></textarea>
                            </div>
                        </div>

                        <!--Decorations-->

                        <div class="venue">
                            <div class="flex-row-sb v">
                                <label class="label">Decorations</label>
                                <div class="radio-btns">
                                    <input type="radio" id="decorations_needed" name="decorations"
                                        class="decorations_needed" value="Decorations Needed" />
                                </div>
                                <!-- Add two buttons with dropdowns here -->
                                <div class="custom-gap_1">
                                    <div class="dropdown">
                                        <button onclick="showDropdown('decorations_dropdown1')" class="dropbtn">
                                            Need
                                        </button>
                                        <div id="decorations_dropdown1" class="dropdown-content"></div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button onclick="showDropdown('decorations_dropdown2')" class="dropbtn">
                                        Not Need
                                    </button>
                                </div>
                            </div>

                            <div class="input_box">
                                <div class="venue_details">
                                    <div class="venue-radiobtns"></div>
                                    <!-- Add venue images and remarks here -->
                                </div>
                            </div>

                            <!-- Remarks input field for Venue -->
                            <div class="venue_remarks">
                                <label class="label">Remarks</label>
                                <textarea class="txt_remarks" rows="4" cols="20" name="venue_remarks_text"
                                    placeholder="Any remarks regarding the 'Other' options chosen"></textarea>
                            </div>
                        </div>

                        <!--catering------------------------------------------------------------------------------------------------>
                        <div class="venue">
                            <div class="flex-row-sb v">
                                <label class="label">Catering</label>
                                <div class="radio-btns">
                                    <input type="radio" id="catering_needed" name="catering" class="catering_needed"
                                        value="Catering Needed" />
                                </div>
                                <div class="dropdown">
                                    <button onclick="showDropdown('catering_dropdown1')" class="dropbtn">
                                        Need
                                    </button>
                                    <div id="catering_dropdown1" class="dropdown-content">
                                        <a>
                                            Lunch(Only)<br />
                                            <input type="checkbox" id="veg" name="veg" value="veg" />
                                            <label for="veg">Veg</label>
                                            <input type="checkbox" id="non-veg" name="non-veg" value="non-veg" />
                                            <label for "non-veg">Non-veg</label> </a><br />

                                        <a>Dinner(Only) <br />
                                            <input type="checkbox" id="veg" name="veg" value="veg" />
                                            <label for="veg">Veg</label>
                                            <input type="checkbox" id="non-veg" name="non-veg" value="non-veg" />
                                            <label for="non-veg">Non-veg</label> </a><br />
                                        <a href="">Lunch & Dinner <br />
                                            <input type="checkbox" id="veg" name="veg" value="veg" />
                                            <label for="veg">Veg</label>
                                            <input type="checkbox" id="non-veg" name="non-veg" value="non-veg" />
                                            <label for "non-veg">Non-veg</label>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button onclick="showDropdown('catering_dropdown2')" class="dropbtn">
                                        Not Need
                                    </button>
                                </div>
                            </div>

                            <div class="input_box">
                                <div class="venue_details">
                                    <div class="venue-radiobtns"></div>
                                </div>
                            </div>

                            <div class="venue_remarks">
                                <label class="label">Remarks</label>
                                <textarea class="txt_remarks" rows="4" cols="20" name="venue_remarks_text"
                                    placeholder="Any remarks regarding the 'Other' options chosen"></textarea>
                            </div>
                        </div>

                        <!-- ****************************************************************************************** -->

                        <div class="submit-btn">
                            <input type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </main> -->
        </div> -->
    </div> -->
</body>

</html>
