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
                <h1>Discover our wide range of <span>suppliers</span></h1>
                <p>
                    MAke your dream day come to life with the help of our suppliers
                </p>
            </div>

            <div class="header__right">
                <div class="header__right-img">
                    <img src="<?php echo URLROOT; ?>\public\images\home\party.svg">
                </div>
            </div>
        </div>
    </header>

    <section class="section container discounts__container mySwiper">
        <h2>Photographers</h2>
        <button></button>
        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="discount_info">
                    <h5>Blissful Diaries Wedding Photography</h5>
                    <small>4.5 rating</small>
                </div>
                <div class="supplier_btns">
                <a href="<?php echo URLROOT; ?>/pages/oneportfolio"><button class="btn" type="submit">View Profile</button></a>
                    <a href="<?php echo URLROOT; ?>/pages/oneportfolio"><button class="booknow_btn" type="submit">Book Now</button></a>
                </div>
                
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_salon.jpg">
                </div>
                <div class="discount_info">
                    <h5>MAMA's wedding Photography</h5>
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
                    <h5>Two Rings Wedding Photography</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>


    <section class="section container discounts__container mySwiper">
        <h2>Decoration</h2>
        <button></button>
        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="discount_info">
                    <h5>Blissful Diaries Wedding Photography</h5>
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
                    <h5>MAMA's wedding Photography</h5>
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
                    <h5>Two Rings Wedding Photography</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>


    <section class="section container discounts__container mySwiper">
        <h2>Cakes</h2>
        <button></button>
        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="discount_info">
                    <h5>Blissful Diaries Wedding Photography</h5>
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
                    <h5>MAMA's wedding Photography</h5>
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
                    <h5>Two Rings Wedding Photography</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>


    <section class="section container discounts__container mySwiper">
        <h2>Reception Halls</h2>
        <button></button>
        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="discount_info">
                    <h5>Blissful Diaries Wedding Photography</h5>
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
                    <h5>MAMA's wedding Photography</h5>
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
                    <img src="<?php echo URLROOT; ?>publicimages/home/disc_deco.jpg">
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
                    <h5>Two Rings Wedding Photography</h5>
                    <small>4.9 rating</small>
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Profile</button>
                    <button class="booknow_btn" type="submit">Book Now</button>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    



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