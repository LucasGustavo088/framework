<?php

// $routes = require_once __DIR__ . '/../App/routes.php';
// $route = new \Core\Route($routes);

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;

$conn = array(
	'driver' 		=> 'pdo_mysql',
	'host' 			=> 'localhost',
	'dbname' 		=> 'VitechBase',
	'user'			=> 'root',
	'password'		=> 'Abcde+12345'
);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$entityManager = EntityManager::create($conn, $config);

