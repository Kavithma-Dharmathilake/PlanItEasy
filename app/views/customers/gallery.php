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
    <div class="suppliers-intro">
        <P>Photographers </P>
    </div>

    <!-- *******VENDOR-GRID************* -->
    <div class="vendor-grid">
        <?php foreach ($data['supplier'] as $i) : ?>

            <div class="vendor-card">
                <a href="<?php echo URLROOT; ?>customers/portfolio/<?php echo $i->id."/".$data['request']->id ?>">
                    <div class="vendor-image">
                        <img src="https://images.unsplash.com/photo-1604017011826-d3b4c23f8914?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="vendor image">
                    </div>
                    <div class="vendor-details">
                        <span class="vendor-catagory">Photographer</span>
                        <h4><?php echo $i->bname ?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="Vendor-bottom-details">
                            <a href="<?php echo URLROOT; ?>customers/sendquote/<?php echo $i->id."/".$data['request']->id ?>">
                                <div class="vendor-price">Send Request</div>
                            </a>

                        </div>
                    </div>
                </a>
            </div>


        <?php endforeach ?>


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





</body>

</html>