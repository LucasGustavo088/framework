<?php
header('Content-Type: text/html; charset=utf-8');

require 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Diretório aonde vou guardar as entidades
$paths = array("./src/App/Entities");
$isDevMode = false;

// Dados da conexão
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'Abcde+12345',
    'dbname'   => 'mydb',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);