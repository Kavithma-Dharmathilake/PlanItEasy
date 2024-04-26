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
                <h1>Your Event, Your Way</h1>
                <p>
                Discover the magic of seamless event planning. From envisioning to executing, let us craft your moments into timeless memories. Explore endless possibilities and let your imagination soar with our expert guidance. Your journey to extraordinary events starts here.
                </p>
                <a href="login.html" class="btn btn-primary">Get Started</a>
            </div>

            <div class="header__right">
                <div class="header__right-img">
                    <img src="images/home/undraw_scrum_board_re_wk7v.svg">
                </div>
            </div>
        </div>
    </header>


    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Categories</h1>
                <p>Explore a world of possibilities with our event planning platform. From weddings to corporate events, birthdays to conferences, we've got you covered. Let your imagination run wild, and we'll make it a reality
                </p>
                <a href="#" class="btn">Book Now</a>
            </div>
            <div class="categories__right">
                <article class="category">
                    <span class="category_img"><img src="images/home/wedding.svg"></span>
                    <h5>Weddings</h5>
                    <p>Crafting your perfect day, one detail at a time. Let love blossom with our wedding expertise.</p>
                </article>
                <article class="category">
                    <span class="category_img"><img src="images/home/birthday.svg"></span>
                    <h5>Birthdays</h5>
                    <p>From candles to cake, and every wish in between. Celebrate life's moments with unforgettable birthdays</p>
                </article>
                <article class="category">
                    <span class="category_img"><img src="images/home/party.svg"></span>
                    <h5>Parties</h5>
                    <p>Set the stage for unforgettable moments. Let's party like there's no tomorrow</p>
                </article>
                <article class="category">
                    <span class="category_img"><img src="images/home/party.svg"></span>
                    <h5>Get Togethers</h5>
                    <p>Create lasting memories with your loved ones. It's time to come together.</p>
                </article>
                <article class="category">
                    <span class="category_img"><img src="images/home/party.svg"></span>
                    <h5>Annivesary Parties</h5>
                    <p>Celebrate your journey together with an anniversary to remember.</p>
                </article>
                <article class="category">
                    <span class="category_img"><img src="images/home/party.svg"></span>
                    <h5>Cooperate Events</h5>
                    <p>Let's make your corporate event an experience to remember.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- End of categories -->

    <!-- ongoing offers & discounts -->
    <section class="section container discounts__container mySwiper">
        <h2>Ongoing Discounts & Offers</h2>
        <div class="swiper-wrapper">
            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="images/home/disc_photo.jpg">
                </div>
                <div class="discount_info">
                    <h5>15% Off on All Bookings</h5>
                    <small>Blissful Diaries Photography</small>
                </div>
                <div class="discount_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quisquam tempore! Rerum porro
                        ipsa nulla?</p>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="images/home/disc_salon.jpg">
                </div>
                <div class="discount_info">
                    <h5>10% Off on Bridal Dressings</h5>
                    <small>Salon glitter</small>
                </div>
                <div class="discount_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quisquam tempore! Rerum porro
                        ipsa nulla?</p>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="images/home/disc_cake.jpg">
                </div>
                <div class="discount_info">
                    <h5>20% off on every cake order</h5>
                    <small>Cakey Bakey</small>
                </div>
                <div class="discount_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quisquam tempore! Rerum porro
                        ipsa nulla?</p>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="images/home/disc_deco.jpg">
                </div>
                <div class="discount_info">
                    <h5>5% Off on All Bookings</h5>
                    <small>MyDeco</small>
                </div>
                <div class="discount_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quisquam tempore! Rerum porro
                        ipsa nulla?</p>
                </div>
            </article>

            <article class="discount swiper-slide">
                <div class="discount_img">
                    <img src="images/home/disc_food.jpg">
                </div>
                <div class="discount_info">
                    <h5>Get 25 free Plates Today</h5>
                    <small>Kamu Catering Service</small>
                </div>
                <div class="discount_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quisquam tempore! Rerum porro
                        ipsa nulla?</p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Get in touch -->

    <section class="git">
        <div class="container git__container">
            <div class="git_leftContainer">
                <h3>Get in Touch With Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore maxime, non est, fugit repellendus
                    dolorem recusandae incidunt, magni totam cumque molestias deserunt vitae explicabo error!</p>
            </div>
            <div class="git_rightContainer">
                <div class="forms">
                    <form>
                        <div>
                            <input type="text" placeholder="Email" />
                            <input type="text" placeholder="Full name" />
                        </div>
                        <div><input type="submit" value="Subscribe" /></div>
                    </form>
                </div>
                <div class="git_img_container">
                    <img src="images/home/git.svg">
                </div>
            </div>
        </div>
    </section>



    <script src="main.js"></script>

    <!-- swipper discount -->
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