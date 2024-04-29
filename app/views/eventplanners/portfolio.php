<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDash</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/requests.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/eventplannerdash.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/supplierPortfolio.css">
</head>

<body>



    <div class="container">
        <div class="profile-header">
            <div class="profile-img">
                <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->caption ?>">
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
                            <?php echo $data['portfolio']->bio ?> </p>
                    </div>
                    <div class="profile-btn">
                        <button class="chatbtn" id="chatBtn"><a href="<?php echo URLROOT; ?>eventplanners">Back to Dashboard</button>
                        <button class="createbtn" id="Create-post"><a href="<?php echo URLROOT; ?>eventplanners/updatePortfolio">Edit</a></button><br />
                      

                    </div>
                    <div class="user-rating">
                        <h3 class="rating"><?php echo $data['portfolio']->rating ?></h3>
                        <div class="rate">
                            <span class="no-of-user-rate"><span><?php echo $data['portfolio']->count ?></span>&nbsp;&nbsp;reviews</span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="right-side">
                <ul class="gallery">
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img1 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img2 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img3 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img4 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img5 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img6 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img7 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img8 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img9 ?>" width="500" height="500" alt="">
                        </a>
                    </li>
                    <li class="result">
                        <a href="#">
                            <img src="<?php echo URLROOT ?>/public/<?php echo $data['portfolio']->img10 ?>" width="500" height="500" alt="">
                        </a>
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


        </div>


    </div>



    <!-- *********FOOTER******** -->

    <script src="supplierPortfolio.js"></script>


</body>



</html>