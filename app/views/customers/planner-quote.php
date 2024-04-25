<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/admindash.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/event-form.css">


</head>

<body>
    <div class="dash-container">
        <aside>

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


        <!-- Content start here -->
        <div>


            <!-- The General Detail Form -->

            <div class="gen-detail">

                <form action="<?php echo URLROOT; ?>customers/sendquote/<?php echo $data['supplier']->id ?>/<?php echo $data['request']->id ?>" method="post">
                    <div>
                        <h1>
                            Request Quote - <?php echo $data['supplier']->bname ?>
                        </h1>
                    </div>
                    <div style="display:flex;">
                        <div style="width:20rem; margin-left:2rem">


                            <p class="form-text">Supplier Name</p>
                            <div class="input-field">
                                <input type="text" name="count" value="<?php echo $data['supplier']->bname ?>" readonly>
                            </div>
                            <p class="form-text" style="margin-top:3rem;">Package Type</p>
                            <div class="input-field">
                                <select name="ptype" id="type">
                                    <option name="packageType" value=""> </option>
                                    <option name="packageType" value="bronze">Bronze package</option>
                                    <option name="packageType" value="silver">Silver Package</option>
                                    <option name="packageType" value="gold"> Gold package</option>

                                </select>
                            </div>
                        </div>
                        <div style="width:20rem; margin-left:2rem">
                            <p class="form-text">Event Date</p>
                            <div class="input-field">
                                <input type="date" name="date" value="<?php echo $data['request']->date ?>" readonly>

                            </div>



                        </div>
                    </div>
                    <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Additional Remarks for the <?php echo $data['supplier']->bname ?></p>
                    <div class="input-field" style="margin-left:2rem;">
                        <textarea name="remark" id="theme" cols="80" rows="5"></textarea>

                    </div>
                    <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Select the services you need</p>
                    <div style="margin-left:1rem;">
                        <div class="vendor-type">
                            <input type="checkbox" id="reception" name="needreception">
                            <label for="reception">Reception</label>

                            <div id="receptionOptions" style="display:none;">
                                <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Select the type</p>
                                <input type="radio" id="indoor" name="receptionType" value="indoor">
                                <label for="indoor" style="font-size: 15px;">Indoor</label><br />
                                <input type="radio" id="outdoor" name="receptionType" value="outdoor">
                                <label for="outdoor" style="font-size: 15px;">Outdoor</label><br />

                                <div style="display:flex;">
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">Start Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="recept-start" value="<?php echo $data['request']->starttime ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">End Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="recept-end" value="<?php echo $data['request']->endtime ?>">
                                        </div>
                                    </div>
                                </div>

                                <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Remarks</p>

                                <div class="input-field">
                                    <textarea name="reception-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="catering" name="needcatering">
                            <label for="catering">Catering</label>
                            <div id="cateringOptions" style="display : none;">
                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Time</p>
                                <input type="checkbox" id="lunch" name="lunch">
                                <label for="lunch" style="font-size: 15px;">Lunch</label><br />
                                <input type="checkbox" id="dinner" name="dinner">
                                <label for="dinner" style="font-size: 15px;">Dinner</label><br />
                                <input type="checkbox" id="breakfast" name="breakfast">
                                <label for="breakfast" style="font-size: 15px;">Breakfast</label><br />

                                <div style="display:flex;">
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">Start Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="cater-start" value="<?php echo $data['request']->starttime ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem" value="<?php echo $data['request']->endtime ?>">End Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="cater-end">
                                        </div>
                                    </div>
                                </div>

                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Additional Services</p>
                                <input type="checkbox" id="Packets" name="Packets">
                                <label for="Packets" style="font-size: 15px;">Packets</label><br />
                                <input type="checkbox" id="Servers" name="Servers">
                                <label for="Servers" style="font-size: 15px;">Servers</label><br />
                                <input type="checkbox" id="Delivery" name="Delivery">
                                <label for="Delivery" style="font-size: 15px;">Delivery</label><br />

                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Price per Plate</p>
                                <div class="input-field">
                                    <input type="number" name="pricePerPlate">
                                </div>
                                <p class="form-text" style="margin-top:2rem; margin-left:2rem;  margin-right:2rem">Remarks</p>

                                <div class="input-field">
                                    <textarea name="cater-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="photography" name="needphoto">
                            <label for="photography">Photography</label>
                            <div id="photoOptions" style="display: none;">
                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Coverage Hours</p>
                                <div class="input-field">
                                    <input type="hours" name="coverage">

                                </div>
                                <div style="display:flex;">
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">Start Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="photo-start" value="<?php echo $data['request']->starttime ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">End Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="photo-end" value="<?php echo $data['request']->endtime ?>">
                                        </div>
                                    </div>
                                </div>

                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Additional Services</p>
                                <input type="checkbox" id="album" name="album">
                                <label for="album" style="font-size: 15px;">Non Digital Products(Albums,prints etc.)</label><br />
                                <input type="checkbox" id="additonal" name="additonal">
                                <label for="additional" style="font-size: 15px;">Additional Photographer</label><br />
                                <input type="checkbox" id="photobooth" name="photobooth">
                                <label for="photobooth" style="font-size: 15px;">Photobooth</label><br />


                                <p class="form-text" style="margin-top:1rem; margin-left:1rem;  margin-right:1rem">Remarks </p>
                                <div class="input-field" style="margin-left:1rem;">
                                    <textarea name="photo-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="decorations" name="needdeco">
                            <label for="decorations">Decorations</label>
                            <div id="decoOptions" style="display: none;">

                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Additional Services</p>
                                <input type="checkbox" id="poruwa" name="poruwa">
                                <label for="prouwa" style="font-size: 15px;">Poruwa</label><br />
                                <input type="checkbox" id="Setee Back" name="Setee-Back">
                                <label for="Setee Back" style="font-size: 15px;">Setee Back</label><br />
                                <input type="checkbox" id="Table Deco" name="Table-Deco">
                                <label for="Table Deco" style="font-size: 15px;">Head Table Deco/ Table Deco</label><br />
                                <input type="checkbox" id="Bouquets" name="Bouquets">
                                <label for="Bouquets" style="font-size: 15px;">Bouquets</label><br />
                                <input type="checkbox" id="Entrance Deco" name="Entrance-deco">
                                <label for="Entrance Deco" style="font-size: 15px;">Entrance Deco</label><br />
                                <input type="checkbox" id="Seating arrangements" name="Seating-deco">
                                <label for="Seating arrangements" style="font-size: 15px;">Seating arrangements</label><br />
                                <input type="checkbox" id="Lighting arrangements" name="Lighting-deco">
                                <label for="Lighting arrangements" style="font-size: 15px;">Lighting arrangements</label><br />
                                <input type="checkbox" id="Ceiling Deco" name="Ceiling-deco">
                                <label for="Ceiling Deco" style="font-size: 15px;">Ceiling Deco</label><br />


                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Flowers</p>
                                <input type="checkbox" id="Natural" name="Natural">
                                <label for="prouwa" style="font-size: 15px;">Natural</label><br />
                                <input type="checkbox" id="Artificial" name="Artifical">
                                <label for="Setee Back" style="font-size: 15px;">Artificial</label><br />



                                <p class="form-text" style="margin-top:1rem; margin-left:1rem;  margin-right:1rem">Remarks </p>
                                <div class="input-field" style="margin-left:1rem;">
                                    <textarea name="deco-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="cake" name="needcake">
                            <label for="cake">Cake Services</label>
                            <div id="cakeOptions" style="display: none;">
                                <p class="form-text" style="margin-top:1rem; margin-left:1rem;  margin-right:1rem">Remarks </p>
                                <div class="input-field" style="margin-left:1rem;">
                                    <textarea name="cake-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="dancing" name="needdance">
                            <label for="dancing">Dancing crew</label>

                            <div id="danceOptions" style="display: none;">

                                <div style="display:flex;">
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">Start Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="dance-start" value="<?php echo $data['request']->starttime ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem" value="<?php echo $data['request']->endtime ?>">End Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="dance-end">
                                        </div>
                                    </div>
                                </div>
                                <p class="form-text" style="margin-top:1rem; margin-left:1rem;  margin-right:1rem">Remarks </p>
                                <div class="input-field" style="margin-left:1rem;">
                                    <textarea name="dance-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="music" name="needmusic">
                            <label for="music">Music Band</label>
                            <div id="musicOptions" style="display: none;">
                                <div style="display:flex;">
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">Start Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="music-start">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">End Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="music-end">
                                        </div>
                                    </div>
                                </div>
                                <p class="form-text" style="margin-top:1rem; margin-left:1rem;  margin-right:1rem">Remarks </p>
                                <div class="input-field" style="margin-left:1rem;">
                                    <textarea name="music-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="vendor-type">
                            <input type="checkbox" id="DJ" name="needdj">
                            <label for="DJ">Dj</label>
                            <div id="djOptions" style="display: none;">

                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Coverage Hours</p>
                                <div class="input-field">
                                    <input type="hours" name="dj-coverage">

                                </div>
                                <div style="display:flex;">
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">Start Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="dj-start">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="form-text" style="margin-top:1.5rem">End Time</p><br />
                                        <div class="input-field2">
                                            <input type="time" name="dj-end">
                                        </div>
                                    </div>
                                </div>

                                <p class="form-text" style="margin-top:2rem; margin-left:1rem;  margin-right:2rem">Additional Services</p>
                                <input type="checkbox" id="smokescreen" name="Smoke">
                                <label for="smokescreen" style="font-size: 15px;">Smokescreen</label><br />
                                <input type="checkbox" id="Lazer" name="Lazer">
                                <label for="Lazer" style="font-size: 15px;">Lazer</label><br />
                                <input type="checkbox" id="firemachines" name="firemachines">
                                <label for="firemachines" style="font-size: 15px;">Firemachines</label><br />

                                <p class="form-text" style="margin-top:1rem; margin-left:1rem;  margin-right:1rem">Remarks </p>
                                <div class="input-field" style="margin-left:1rem;">
                                    <textarea name="dj-remark" id="theme" cols="70" rows="5"></textarea>

                                </div>
                            </div>
                        </div>


                    </div>

                    <input type="submit">
                </form>




            </div>





        </div>


</body>

<script>
    // Reception checkbox
    const receptionCheckbox = document.getElementById('reception');
    const receptionOptions = document.getElementById('receptionOptions');

    receptionCheckbox.addEventListener('change', function() {
        if (this.checked) {
            receptionOptions.style.display = 'block';
        } else {
            receptionOptions.style.display = 'none';
            receptionRemarks.value = ''; // Clear remarks if reception is unchecked
        }
    });

    // Catering checkbox
    const cateringCheckbox = document.getElementById('catering');
    const cateringOptions = document.getElementById('cateringOptions');

    cateringCheckbox.addEventListener('change', function() {
        if (this.checked) {
            cateringOptions.style.display = 'block';
        } else {
            cateringOptions.style.display = 'none';

        }
    });

    //Decoration option
    const decoCheckbox = document.getElementById('decorations');
    const decoOptions = document.getElementById('decoOptions');


    decoCheckbox.addEventListener('change', function() {
        if (this.checked) {
            decoOptions.style.display = 'block';
        } else {
            decoOptions.style.display = 'none';

        }
    });

    //photography option
    const photographyCheckbox = document.getElementById('photography');
    const photographyOptions = document.getElementById('photoOptions');


    photographyCheckbox.addEventListener('change', function() {
        if (this.checked) {
            photographyOptions.style.display = 'block';
        } else {
            photographyOptions.style.display = 'none';

        }
    });

    //Cake option
    const CakeCheckbox = document.getElementById('cake');
    const cakeOptions = document.getElementById('cakeOptions');


    CakeCheckbox.addEventListener('change', function() {
        if (this.checked) {
            cakeOptions.style.display = 'block';
        } else {
            cakeOptions.style.display = 'none';

        }
    });

    //Dancing Crew
    const danceCheckbox = document.getElementById('dancing');
    const danceOptions = document.getElementById('danceOptions');


    danceCheckbox.addEventListener('change', function() {
        if (this.checked) {
            danceOptions.style.display = 'block';
        } else {
            danceOptions.style.display = 'none';

        }
    });

    //Music Band
    const musicCheckbox = document.getElementById('music');
    const musicOptions = document.getElementById('musicOptions');


    musicCheckbox.addEventListener('change', function() {
        if (this.checked) {
            musicOptions.style.display = 'block';
        } else {
            musicOptions.style.display = 'none';

        }
    });

    //DJ
    const djCheckbox = document.getElementById('DJ');
    const djOptions = document.getElementById('djOptions');


    djCheckbox.addEventListener('change', function() {
        if (this.checked) {
            djOptions.style.display = 'block';
        } else {
            djOptions.style.display = 'none';

        }
    });
</script>

</html>