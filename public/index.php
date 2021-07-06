<?php

session_start();

require_once('../config.php');
require_once(ROOT_PATH.'/core/models/Database.php');
require_once(ROOT_PATH.'/core/Route.php');

$route = new Route();
echo '<br><br><br><br>';
var_dump($route);