<?php

//System Configuration (Connection and constants)
require_once __DIR__ . "/configuration/configuration.php";

//Composer autoload
require_once DIR_FRAMEWORK . "vendor/autoload.php";

//Loading dependencies
require_once DIR_FRAMEWORK . "Core/configuration/dependecies.php";

/* start routes */
$routes = require_once DIR_FRAMEWORK . "App/routes.php";
$route = new \Core\Route($routes);

//helpers
include_once(DIR_FRAMEWORK . "Core/helpers/helpers.php");
