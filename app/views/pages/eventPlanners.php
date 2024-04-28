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


    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/supplier_AIO.css">
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


    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Discover our wide range of <span>EventPlanners</span></h1>
                <p>
                    MAke your dream day come to life with the help of our EventPlanners
                </p>
            </div>

            <div class="header__right">
                <div class="header__right-img">
                    <img src="<?php echo URLROOT; ?>\public\images\home\party.svg">
                </div>
            </div>
        </div>
    </header>

    
    <div class="suppliers-intro">
            <p style="margin-top:5rem">Event Planers</p>
    </div>
    </div>
    <div class="vendor-grid">
        <?php foreach ($data['eventplanners'] as $eventplanner) : ?>
            <div class="vendor-card">
                <div class="vendor-image">
                    <img src="https://images.pexels.com/photos/3184423/pexels-photo-3184423.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="vendor image">
                </div>
                <div class="vendor-details">
                    <span class="vendor-catagory">Event Planner</span>
                    <h4><a href=""><?php echo $eventplanner->bname; ?></a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="Vendor-bottom-details">
                        <div class="vendor-price"><small>$96.00</small>$230.99</div>
                        <div class="vendor-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>



    <!-- <section class="section container discounts__container mySwiper">
        <h2>EventPlanners</h2>
        <button></button>
        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="discount_info">
                    <h5>Blissful Diaries Wedding Planners</h5>
                    <small>4.5 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
                
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_salon.jpg">
                </div>
                <div class="discount_info">
                    <h5>MAMA's wedding Planners</h5>
                    <small>4.7 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_cake.jpg">
                </div>
                <div class="discount_info">
                    <h5>Ceylone Elegance</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_deco.jpg">
                </div>
                <div class="discount_info">
                    <h5>Dream Studio</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_food.jpg">
                </div>
                <div class="discount_info">
                    <h5>Two Rings Wedding Planner</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section> -->


    
    



    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //when window width >=600px
            breakpoints: {
                600: {
                    slidesPerView: 3
                }
            }
        });
    </script>



</body>

</html>