CONTACT US<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanIteasy</title>
    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/contactUs.css">
</head>
<body>
<nav>
        <div class="container nav__container">
            <a href="<?php echo URLROOT; ?>">
                <h4>PlanItEasy</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="<?php echo URLROOT; ?>">Home</a></li>
                <li><a href="<?php echo URLROOT; ?>pages/about">Who Are We</a></li>
                <li><a href="<?php echo URLROOT; ?>pages/eventplanners">Event Planners</a></li>
                <li><a href="<?php echo URLROOT; ?>pages/suppliers">Suppliers</a></li>
                <li><a href="<?php echo URLROOT; ?>pages/join">Join The Team</a></li>
                <li><a href="<?php echo URLROOT; ?>pages/contact">Contact Us</a></li>
                <li><a href="<?php echo URLROOT; ?>users/login">Login</a></li>
            </ul>
            <button id="open-menu-btn"><span class="material-symbols-outlined"></span></button>
            <button id="close-menu-btn"><span class="material-symbols-outlined"></span></button>
        </div>
    </nav>


    <div class="contactUs">
    <div class="container contactUs_container">
        <h2>We would love to hear from <b>YOU</b></h2>
        <div class="contactUs_wrapper">
            <div class="contact_form">
                <h3>Send us a message</h3>
                <form>
                    <div class="form_group">
                        <input type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="form_group">
                        <input type="email" name="email" placeholder="Your email">
                    </div>
                    <div class="form_group">
                        <textarea name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn" type="submut">Send Message</button>
                </form>
            </div>
            <div class="contactUs-img">
                <img src="<?php echo URLROOT; ?>images/contactUs.svg">
            </div>
        </div>
        </div>
    </div>
</div> 
</body>