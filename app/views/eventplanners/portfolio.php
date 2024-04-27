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
                <img src="https://images.unsplash.com/photo-1519306943444-3e1588e3fd23?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="200" alt="Profile Image">
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
                            Lorem ipsum dolor sit amet, hello how consectetur adipisicing elit. Sint consectetur provident magni yohoho consequuntur, voluptatibus ghdfff exercitationem at quis similique. Optio, amet!
                        </p>
                    </div>
                    <div class="profile-btn">
                        <button class="chatbtn" id="chatBtn"><i class="fa fa-comment"></i> Chat</button>
                        <button class="createbtn" id="Create-post"><a href="<?php echo URLROOT; ?>eventplanners/sendquote/<?php echo $data['user']->id."/".$data['request']->id ?>"><i class="fa fa-plus"></i>Request Quote</a></button>
                    </div>
                    <div class="user-rating">
                        <h3 class="rating">4.5</h3>
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
                            <span class="no-of-user-rate"><span>123</span>&nbsp;&nbsp;reviews</span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="right-side">
                <ul class="gallery">
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1617724963453-8f92815007f5?q=80&w=972&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1537633468298-d86f0c2d4173?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8d2VkZGluZyUyMHBob3Rvc3xlbnwwfDF8MHx8fDI%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1481980235850-66e47651e431?q=80&w=1588&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1600283899307-85101eb4d21e?q=80&w=1586&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1537633552985-df8429e8048b?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1482482097755-0b595893ba63?q=80&w=1588&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1549416878-b9ca95e26903?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1542427183-0904ccb713bf?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1519307212971-dd9561667ffb?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
                    </li>
                    <li class="result">
                        <a href="#"><img src="https://images.unsplash.com/photo-1608068071876-4787af8c930b?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="500" alt=""></a>
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
                Lorem ipsum dolor sit amet, hello how consectetur adipisicing elit. Sint consectetur provident magni yohoho consequuntur, voluptatibus ghdfff exercitationem at quis similique. Optio, amet!
                Lorem ipsum dolor sit amet, hello how consectetur adipisicing elit. Sint consectetur provident magni yohoho consequuntur, voluptatibus ghdfff exercitationem at quis similique. Optio, amet!
                Lorem ipsum dolor sit amet, hello how consectetur adipisicing elit. Sint consectetur provident magni yohoho consequuntur, voluptatibus ghdfff exercitationem at quis similique. Optio, amet!
                Lorem ipsum dolor sit amet, hello how consectetur adipisicing elit. Sint consectetur provident magni yohoho consequuntur, voluptatibus ghdfff exercitationem at quis similique. Optio, amet!

            </div>
            <div style="width:300px;padding:2rem">
                <----- calander space 

            </div>
        </div>


    </div>

    <!-- *********REVIEWS********* -->

    <div class="reviews">
        <div class="left-review">
            <div class="reviews-container">
                <h2>Reviews</h2>
                <div class="review">
                    <span class="icon-container">5 <i class="fa fa-star checked"></i></span>
                    <div class="progress">
                        <div class="progress-done" data-done="68"></div>
                    </div>
                    <span class="percent">68%</span>
                </div>
                <div class="review">
                    <span class="icon-container">4 <i class="fa fa-star checked"></i></span>
                    <div class="progress">
                        <div class="progress-done" data-done="13"></div>
                    </div>
                    <span class="percent">13%</span>
                </div>
                <div class="review">
                    <span class="icon-container">3 <i class="fa fa-star checked"></i></span>
                    <div class="progress">
                        <div class="progress-done" data-done="9"></div>
                    </div>
                    <span class="percent">9%</span>
                </div>
                <div class="review">
                    <span class="icon-container">2 <i class="fa fa-star checked"></i></span>
                    <div class="progress">
                        <div class="progress-done" data-done="3"></div>
                    </div>
                    <span class="percent">3%</span>
                </div>
                <div class="review">
                    <span class="icon-container">1 <i class="fa fa-star checked"></i></span>
                    <div class="progress">
                        <div class="progress-done" data-done="7"></div>
                    </div>
                    <span class="percent">7%</span>
                </div>
            </div>
        </div>

        <div class="right-review">
            <div class="review-heading">
                <p>Stories from our <span>Customers</span></p>
            </div>
            <div class="review-card-container">

                <div class="review-card">
                    <div class="customerPhoto-container">
                        <img class="customer-photo" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=3161&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Customer Photo">
                    </div>
                    <div class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                    <p class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="review-card">
                    <div class="customerPhoto-container">
                        <img class="customer-photo" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=3161&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Customer Photo">
                    </div>
                    <div class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                    <p class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

            </div>
        </div>

    </div>
    </div>

    <!-- **********PACKAGE DETAILS********* -->

    <div class="package-container">
        <div class="package-header">
            <p>Check out our Packages for 2024</p>
        </div>

        <div class="price-table">
            <div class="price-card">
                <h2 class="price-card__title">Basic</h2>
                <div class="price-card__ribbon"><span class="price-card__ribbon-text">100,000LKR</span></div>
                <p>Shoot & reception coverage</p>
                <p>100 thanking cards</p>
                <p>2 enlargements</p>
                <p>All soft copies</p>
            </div>
            <div class="price-card">
                <h2 class="price-card__title">Advanced</h2>
                <div class="price-card__ribbon"><span class="price-card__ribbon-text">150,000LKR</span></div>
                <p>Shoot & reception coverage</p>
                <p>100 thanking cards</p>
                <p>2 enlargements</p>
                <p>1 Fine art Album</p>
            </div>

            <div class="price-card">

                <h2 class="price-card__title">Premium</h2>
                <div class="price-card__ribbon"><span class="price-card__ribbon-text">200,000LKR</span></div>
                <p>Shoot & reception coverage</p>
                <p>100 thanking cards</p>
                <p>2 enlargements</p>
                <p>All soft copies</p>
            </div>
        </div>
    </div>

    <!-- *********FOOTER******** -->

    <script src="supplierPortfolio.js"></script>


</body>

</html>