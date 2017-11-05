<?php

$paths = array(DIR_FRAMEWORK . 'App/Models/model.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

$driver = new AnnotationDriver(new AnnotationReader(), $paths);
AnnotationRegistry::registerLoader('class_exists');

$config = Setup::createConfiguration(TRUE);
$config->setMetadataDriverImpl($driver);
$dbParms = include '/database.params.php';
return EntityManager::create($dbParams, $config);