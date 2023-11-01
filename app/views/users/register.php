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
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <h2>Let's create your account</h2>
                <div class="input-box <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                    <input type="text" name="email" placeholder="E-mail" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['email_err']; ?>
                    </span>
                </div>
                <div class="input-box <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>">
                    <input type="text" name="name" placeholder="Name" value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['name_err']; ?>
                    </span>
                </div>
                <div class="input-box <?php echo (!empty($data['contact_err'])) ? 'is-invalid' : ''; ?>">
                    <input type="text" name="contact" placeholder="Contact" value="<?php echo $data['contact']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['contact_err']; ?>
                    </span>
                </div>
                 <div class="input-box <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>">
                    <input type="text" name="address" placeholder="Address" value="<?php echo $data['address']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['address_err']; ?>
                    </span>
                </div>
                <div class="input-box <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                    <input type="text" name="password" placeholder="Password" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['password_err']; ?>
                    </span>
                </div>
                <div class="input-box <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>">
                    <input type="text"name="confirm_password" placeholder="Confirm your Password">
                    <span class="invalid-feedback">
                        <?php echo $data['confirm_password_err']; ?>
                    </span>
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