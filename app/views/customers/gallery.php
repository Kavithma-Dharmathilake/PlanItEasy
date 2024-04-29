<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event request</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/supplier.css">



</head>

<body>



    <a href="<?php echo URLROOT ?>customers/supplier/<?php echo $data['request']->id ?>"> <button style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem">All Vendors</button></a>
    <a href="<?php echo URLROOT ?>customers/quotations/<?php echo $data['request']->id ?>"> <button style="padding:1rem; margin:1rem; background-color:#7380ec;color:white; border-radius:0.4rem">My Quotations</button></a>
    <div class="suppliers-intro">
        <P><?php echo $data['type'] ?></P>

    </div>
    <div style="margin-left:20px;margin-top:20px;">
        <h2 style="font-weight:500"><?php echo $data['type']?> available for the day</h2>
        <h2><?php echo $data['type'] ?> available for the day</h2>
    </div>


    <!-- *******VENDOR-GRID************* -->
    <div class="vendor-grid">

        <?php foreach ($data['supplier'] as $i) :

        ?>
            <?php $disabled = true; ?>
            <?php foreach ($data['sent'] as $s) {
                if ($i->uid == $s->sid) {

                    $disabled = false;
                    break;
                }
            } ?>
            <?php if ($disabled) { ?>
                <div class="vendor-card">

                    <a href="<?php echo URLROOT; ?>customers/portfolio/<?php echo $i->uid ?>/<?php echo $data['request']->id ?>">
                        <div class="vendor-image">
                            <img src="<?php echo URLROOT ?>public/<?php echo $i->caption ?>" alt="vendor image">
                        </div>
                        <div class="vendor-details">
                            <span class="vendor-catagory"><?php echo $data['type'] ?></span>
                            <h4><?php echo $i->bname ?></h4>


                            <div class="Vendor-bottom-details">
                                <a href="<?php echo URLROOT; ?>customers/sendquote/<?php echo $i->uid . "/" . $data['request']->id ?>">
                                    <div class="vendor-price">Send Request</div>
                                </a>

                            </div>
                    
                        </div>
                    </a>
                </div>

                <?php } ?>


            <?php endforeach ?>


    </div>

    <section class="vendor-section">
        <div class="card-grid">
          <a class="card" href="<?php echo URLROOT ?>customers/supplier/<?php echo $data['request']->id; ?>">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1565661834013-d196ca46e14e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8d2VkZGluZyUyMGNha2V8ZW58MHx8MHx8fDA%3D)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Cake Artists</h3>
            </div>
          </a>
          <a class="card" href="<?php echo URLROOT ?>customers/reception/<?php echo $data['request']->id; ?>">
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
          <a class="card" href="<?php echo URLROOT ?>customers/decorations/<?php echo $data['request']->id; ?>">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1627045778010-b3a8c6b171b0?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHdlZGRpbmclMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Event Decorations</h3>
            </div>
          </a>
          <a class="card" href="<?php echo URLROOT ?>customers/caterings/<?php echo $data['request']->id; ?>">
            <div class="card__background" style="background-image: url(https://images.pexels.com/photos/4946547/pexels-photo-4946547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Catering</h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.pexels.com/photos/17286636/pexels-photo-17286636/free-photo-of-an-elegant-wedding-invitation.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Stationary</h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.pexels.com/photos/8752654/pexels-photo-8752654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Dancing Crew</h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.pexels.com/photos/8512681/pexels-photo-8512681.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">Music Band</h3>
            </div>
          </a>
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.pexels.com/photos/1493004/pexels-photo-1493004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)"></div>
            <div class="card__content">
              <p class="card__category">Top Rated</p>
              <h3 class="card__heading">DJ</h3>
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

    <!-- </div> -->
    <?php if ($data['nosupplier'] != null) { ?>
        <div style="margin-left:20px;margin-top:20px;">
            <h2><?php echo $data['type'] ?> not available for the day</h2>
        </div>


        <!-- *******VENDOR-GRID************* -->

        <div class="vendor-grid">

            <?php foreach ($data['nosupplier'] as $s) :

            ?>







                <div class="vendor-card">

                    <a href="<?php echo URLROOT; ?>customers/portfolio/<?php echo $s->uid ?>/<?php echo $data['request']->id ?>">
                        <div class="vendor-image">
                            <img src="<?php echo URLROOT ?>public/<?php echo $s->caption ?>" alt="vendor image">
                        </div>
                        <div class="vendor-details">
                            <span class="vendor-catagory"><?php echo $data['type'] ?></span>
                            <h4><?php echo $s->bname ?></h4>

                            <div class="Vendor-bottom-details">
                                <a href="<?php echo URLROOT; ?>customers/sendquote/<?php echo $s->uid . "/" . $data['request']->id ?>">
                                    <div class="vendor-price">Send Request</div>
                                </a>

                            </div>
                        </div>
                    </a>
                </div>




            <?php endforeach ?>


        </div>
    <?php } ?>

</body>

</html>