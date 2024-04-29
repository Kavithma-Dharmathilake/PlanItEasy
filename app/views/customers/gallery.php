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