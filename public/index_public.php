<?php
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__ . "/../Core/configuration/configuration.php";



// use Doctrine\ORM\Tools\Setup;
// use Doctrine\ORM\EntityManager;

// // Diretório aonde vou guardar as entidades
// $paths = array("./src/App/Entities");
// $isDevMode = false;

// // Dados da conexão
// $dbParams = array(
//     'driver'   => 'pdo_mysql',
//     'user'     => 'root',
//     'password' => 'Abcde+12345',
//     'dbname'   => 'VitechBase',
// );

// $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
// $entityManager = EntityManager::create($dbParams, $config);

// //merge
// $query = Doctrine_Query::create()
// 		->select('*')
// 		->from('Cliente');

// $clientes = $query->fetchArray();
// var_dump($clientes);

//echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//header('Location: src/app/controllers/HomeBase/HomeBase.php');









require_once DIR_FRAMEWORK . "vendor/autoload.php";
require_once DIR_FRAMEWORK . "Core/bootstrap.php";


