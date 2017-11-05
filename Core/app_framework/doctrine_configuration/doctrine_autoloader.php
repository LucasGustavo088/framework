<?php
echo "string";
//auto loader doctrine
$autoLoader = include  DIR_FRAMEWORK . "vendor/autoload.php";
$autoLoader->add('Doctrine\Annotations', DIR_FRAMEWORK . 'vendor/doctrine/annotations/lib');
$autoLoader->add('Doctrine\Cache', DIR_FRAMEWORK . 'vendor/doctrine/cache/lib');
$autoLoader->add('Doctrine\Collections', DIR_FRAMEWORK . 'vendor/doctrine/collections/lib');
$autoLoader->add('Doctrine\Common', DIR_FRAMEWORK . 'vendor/doctrine/common/lib');
$autoLoader->add('Doctrine\DBAL', DIR_FRAMEWORK . 'vendor/doctrine/dbal/lib');
$autoLoader->add('Doctrine\ORM', DIR_FRAMEWORK . 'vendor/doctrine/orm/lib');
$autoLoader->add('Doctrine\Lexer', DIR_FRAMEWORK . 'vendor/doctrine/lexer/lib');

$autoLoader->add('App', DIR_FRAMEWORK);