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


    <link rel="stylesheet" href="<?php echo URLROOT; ?>public\css\portfolio.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public\css\style.css">
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
        <div class="header_container">
            <div class="char_details">
                <div class="img_container">
                    <img src="<?php echo URLROOT; ?>public\images\home\avatar4.jpg">
                </div>
                <h2>Jane Doe</h2>
                <h3>Photographer</h3>
                <h4>20 completed events</h4>
                <h4>21 reviews</h4>
            </div>
            <div class="char_description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt asperiores minus provident a nostrum? Impedit sequi fugiat odio perspiciatis soluta, maxime aperiam tempora aliquid nemo excepturi nihil voluptatem doloremque vitae ea dolores molestiae assumenda repellendus unde. Assumenda porro, autem aspernatur neque similique amet quos officiis.</p>
            </div>
        </div>
    </header>


    <section class="section container discounts__container mySwiper">
        <h2>Gallery</h2>

        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Album</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Album</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Album</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Album</button>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="<?php echo URLROOT; ?>public/images/home/disc_photo.jpg">
                </div>
                <div class="supplier_btns">
                    <button class="btn" type="submit">View Album</button>
                </div>
            </article>

        </div>
        <div class="swiper-pagination"></div>
    </section>


    <section class="packages">
        <div class="packages_container">
            <h3>Gold Package</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, adipisci!</p>
            <h4>Rs.100,000</h4>
            <button class="booknow_btn" type="submit">Book Now</button>
        </div>

        <div class="packages_container">
            <h3>Silver Package</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, adipisci!</p>
            <h4>Rs.75,000</h4>
            <button class="booknow_btn" type="submit">Book Now</button>
        </div>

        <div class="packages_container">
            <h3>Bronze Package</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, adipisci!</p>
            <h4>Rs.50,000</h4>
            <button class="booknow_btn" type="submit">Book Now</button>
        </div>
    </section>

    <a href="<?php echo URLROOT; ?>customers/addquoate"><div class="q_bt"><button class="quotation_btn" type="submit">Request Quatation</button></div></a>

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