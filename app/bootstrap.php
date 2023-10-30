<?php

//load config
require_once 'config/config.php';

//Load libraries

//Load helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

//Autoload core Libraries
spl_autoload_register(function($className){

    require_once 'libraries/'.$className.'.php';
});



?>