<?php
require_once 'bootstrap.php';

use Doctrine\ORM\Tools\SchemaTool;
use Entity\Product;

$schemaTool = new SchemaTool($entityManager);
$classes = [$entityManager->getClassMetadata(Product::class)];
$schemaTool->createSchema($classes);

echo "Database schema created!\n";
