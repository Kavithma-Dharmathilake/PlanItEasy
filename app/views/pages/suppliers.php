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

    <!-- *******VENDOR-GRID************* -->
    
    <div class="suppliers-intro">
            <p style="margin-top:5rem">Photographers</p>
    </div>
    <div class="vendor-grid">
    <?php foreach ($data['photographers'] as $photographer) : ?>
            <div class="vendor-card">
                <div class="vendor-image">
                    <img src="https://images.unsplash.com/photo-1604017011826-d3b4c23f8914?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="vendor image">
                </div>
                <div class="vendor-details">
                    <span class="vendor-catagory">Photographer</span>
                    <h4><a href=""><?php echo $photographer->bname; ?></a></h4>
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

<div class="suppliers-intro">
            <p>Reception Halls</p>
</div>
<div class="vendor-grid">
<?php foreach ($data['reception'] as $reception) : ?>
        <!-- <div class="suppliers-intro">
            <p><?php echo $reception->stype; ?></p>
        </div> -->
            <div class="vendor-card">
                <div class="vendor-image">
                    <img src="https://images.pexels.com/photos/13045662/pexels-photo-13045662.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="vendor image">
                </div>
                <div class="vendor-details">
                    <span class="vendor-catagory">Reception Hall</span>
                    <h4><a href=""><?php echo $reception->bname; ?></a></h4>
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

<div class="suppliers-intro">
            <p>Catering Services</p>
</div>
<div class="vendor-grid">
<?php foreach ($data['catering'] as $catering) : ?>
        <!-- <div class="suppliers-intro">
            <p><?php echo $catering->stype; ?></p>
        </div> -->
        
            <div class="vendor-card">
                <div class="vendor-image">
                    <img src="https://images.pexels.com/photos/1741285/pexels-photo-1741285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="vendor image">
                </div>
                <div class="vendor-details">
                    <span class="vendor-catagory">Catering Service</span>
                    <h4><a href=""><?php echo $catering->bname; ?></a></h4>
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

        

    <!-- *********OTHER VENDORS********* -->

    <hr>

    <div class="other-vendors">
        <h2>Other <span>Suppliers</span> in Galle</h2>
    </div>

    <section class="vendor-section">
        <div class="card-grid">
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1565661834013-d196ca46e14e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8d2VkZGluZyUyMGNha2V8ZW58MHx8MHx8fDA%3D)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Cake Artists</h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1561593367-66c79c2294e6?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8d2VkZGluZyUyMHJlY2VwdGlvbnxlbnwwfHwwfHx8MA%3D%3D)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Reception Halls</h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1618107095181-e3ba0f53ee59?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2VkZGluZyUyMGRqfGVufDB8fDB8fHww)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Sounds & DJ</h3>
            </div>
          </li>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1627045778010-b3a8c6b171b0?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHdlZGRpbmclMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Event Decorations</h3>
            </div>
          </a>
        <div>
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