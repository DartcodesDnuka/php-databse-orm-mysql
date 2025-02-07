<?php

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once "vendor/autoload.php";

// Database configuration
$connectionParams = [
    'dbname'   => 'orm',
    'user'     => 'root',
    'password' => '....',
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql', // Use 'pdo_pgsql' for PostgreSQL
];

// Enable development mode (disable caching)
$config = ORMSetup::createAnnotationMetadataConfiguration(
    [__DIR__ . "/src"],
    true
);


// Create the EntityManager
$entityManager = EntityManager::create(DriverManager::getConnection($connectionParams, $config), $config);
