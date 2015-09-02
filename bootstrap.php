<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// the connection configuration
$connectionParams = [
    'dbname'   => 'scs_promo',
    'user'     => 'postgres',
    'password' => 'postgres',
    'host'     => 'localhost',
    'driver'   => 'pdo_pgsql'
];

$paths = [
    __DIR__ . '/App/Entities'
];

$config = Setup::createAnnotationMetadataConfiguration($paths);

return EntityManager::create($connectionParams, $config);