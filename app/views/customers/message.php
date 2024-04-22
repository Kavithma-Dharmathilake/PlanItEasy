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

    <style>
        /* Chat containers */
        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            margin-right: 30px;
        }

        /* Darker chat container */
        .container-darker {
            border: 2px solid #dedede;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
            margin-left: 30px;
            border-color: #ccc;
            background-color: #ddd;
            padding-bottom: 25px;
        }

        /* Clear floats */
        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Style time text */
        .time-right {
            float: right;
            color: #aaa;
        }

        /* Style time text */
        .time-left {
            float: left;
            color: #999;
        }

        .user {
            float: left;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
        }
    </style>
    </style>
</head>

<body>
    <div class="dash-container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?php echo URLROOT; ?>/public/images/logo.jpg">
                    <h2>PlanItEasy</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="<?php echo URLROOT; ?>customers">
                    <span class="material-icons-sharp" class="active">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/events">
                    <span class="material-icons-sharp">man</span>
                    <h3>Events</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/payments">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Payments</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/message">
                    <span class="material-icons-sharp">message</span>
                    <h3>Messages</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/viewquote">
                    <span class="material-icons-sharp"> note_add</span>
                    <h3>supplier quotation</h3>
                </a>
                <a href="<?php echo URLROOT; ?>customers/profile">
                    <span class="material-icons-sharp">person</span>
                    <h3>profile</h3>
                </a>
                <a href="<?php echo URLROOT; ?>users/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        <main>
            <h1>Messages on Quotation Request - <?php echo $data['request']->id ?></h1>


            <?php foreach ($data['messages'] as $i) : ?>


                <?php if ($i->sender == $_SESSION['user_id']) { ?>
                    <div class="container-darker">
                        <strong class="user">You</strong><br /><br />

                        <p><?php echo $i->content ?></p>

                        <span class="time-right"><?php echo $i->time ?> | <?php echo $i->date ?></span>
                    </div>
                <?php } else { ?>




                    <div class="container">
                        <strong class="user">Supplier</strong><br /><br />
                        <p><?php echo $i->content ?></p>
                        <span class="time-right"><?php echo $i->time ?> | <?php echo $i->date ?></span>
                    </div>

                <?php } ?>



            <?php endforeach ?>


            <form action="<?php echo URLROOT ?>suppliers/message/<?php echo  $data['request']->id ?>" method="POST">
                <textarea name="content"> </textarea>
                <input style="  background-color: #7380ec;border: none;color: white;padding: 10px 32px;margin: 4px 2px;border-radius:3rem" type="Submit" value="Send">
            </form>





    </div>
    </main>
    </div>

</body>

</html>