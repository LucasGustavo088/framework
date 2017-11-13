<?php
//helpers
include_once(DIR_FRAMEWORK . "Core/helpers/helpers.php");

/* start routes */
$routes = require_once DIR_FRAMEWORK . "App/routes.php";
$route = new \Core\Route($routes);
