<?php

####################
# FRONT CONTROLLER #
####################

// GLOBAL SETTINGS
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// INCLUDING FILES
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
include_once ROOT . '/components/Db.php';

// CONNECTION TO DB
#####

// ROUTING
$router = new Router();
$router->run();





