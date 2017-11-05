<?php
include 'Vendor/autoload.php';
use App\Entities\Users;
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
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "\..\App\Entities"), $isDevMode);

$entityManager = EntityManager::create($conn, $config);

$users = $entityManager->getRepository('App\Entities\Users');

var_dump($users->findAll());

die;
