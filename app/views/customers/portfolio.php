<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Portfolio</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/supplierPortfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="container">
        <div class="profile-header">
            <div class="profile-img">
                <img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->caption ?>" width="200" alt="Profile Image">
            </div>
            <div class="profile-nav-info">
                <h3 class="user-name"><?php echo $data['user']->bname ?></h3>


            </div>

        </div>

        <div class="main-bd">
            <div class="left-side">
                <div class="profile-side">
                    <p class="mobile-no"><i class="fa fa-phone"></i> <?php echo $data['user']->contact ?></p>
                    <p class="user-mail"><i class="fa fa-envelope"></i> <?php echo $data['user']->email ?></p>
                    <div class="user-bio">
                        <h3>Bio</h3>
                        <p class="bio">
                            <?php echo $data['portfolio']->bio ?>
                        </p>
                    </div>
                    <div class="profile-btn">
                        <button class="chatbtn" id="chatBtn"><i class="fa fa-comment"></i> Chat</button>
                        <button class="createbtn" id="Create-post"><a href="<?php echo URLROOT; ?>customers/sendquote/<?php echo $data['user']->id."/".$data['request']->id ?>"><i class="fa fa-plus"></i>Request Quote</a></button>
                    </div>
                    <div class="user-rating">
                        <h3 class="rating"><?php echo $data['portfolio']->rating ?></h3>
                        <div class="rate">
                            <div class="star-outer">
                                <div class="star-inner">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <span class="no-of-user-rate"><span><?php echo $data['portfolio']->count ?></span>&nbsp;&nbsp;reviews</span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="right-side">
                <ul class="gallery">
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img1 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img2 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img3 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img4 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img5 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img6 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img7 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img8 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img9 ?>" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="<?php echo URLROOT ?>public/<?php echo $data['portfolio']->img10 ?>" width="500" height="500" alt=""></a>
                    </li>
              
                </ul>
            </div>
        </div>
    </div>

    <div class="package-container">
        <div class="package-header">
            <p>About <?php echo $data['user']->bname ?></p>
        </div>
        <div style="display:flex; margin:2rem;padding:2rem;">
            <div style="width:800px;padding:2rem">
            <?php echo $data['portfolio']->description ?>
            </div>
            <div style="width:300px;padding:2rem">
                <----- calander space 

            </div>
        </div>


    </div>

    <!-- *********REVIEWS********* -->

  
    <div class="package-container">
        <div class="package-header">
            <p>Check out our Packages for 2024</p>
        </div>

        <div class="price-table">
            <?php foreach($data['packages'] as $p): ?>
            <div class="price-card">
                <h2 class="price-card__title"><?php echo $p->name ?></h2>
                <div class="price-card__ribbon"><span class="price-card__ribbon-text"><?php echo $p->price ?>LKR</span></div>
                <p><?php echo $p->services ?></p>
            
            </div>
         <?php endforeach ?>

           
        </div>
    </div>

  


</body>

</html>