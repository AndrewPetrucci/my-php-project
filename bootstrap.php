<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

$paths = [__DIR__ . '/src/Entity'];
$isDevMode = true;

$dbParams = [
    'driver'   => 'pdo_pgsql',
    'host'     => '127.0.0.1',
    'port'     => '5432',
    'user'     => 'postgres',
    'password' => 'test',
    'dbname'   => 'myapp',
];

// Set $useSimpleAnnotationReader = false for Doctrine Annotations 2.x
$config = Setup::createAnnotationMetadataConfiguration(
    $paths,
    $isDevMode,
    null,   // proxy dir
    null,   // cache (optional)
    false   // <--- useSimpleAnnotationReader = false
);

$entityManager = EntityManager::create($dbParams, $config);
