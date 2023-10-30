<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanIteasy</title>
    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/login.css">
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

    <div class="login" style="margin-top:100px">
        <div class="wrapper">
            <form action="">
                <h2>Let's create your account</h2>
                <div class="input-box">
                    <input type="text" placeholder="E-mail" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Contact" required>
                </div>
                 <div class="input-box">
                    <input type="text" placeholder="Address" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Confirm your Password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remeber Me</label>
                </div>

                <button type="submit" class="btn">Sign up</button>
                <div class="log-in">
                    <p>Already have an Account?<a href="<?php echo URLROOT; ?>users/login">Log in</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>