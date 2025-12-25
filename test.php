<?php
require_once 'bootstrap.php';

use Entity\Product;

// 1. Create a new product
$product = new Product();
$product->setName('Test Product');

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

// 2. Fetch it back
$repo = $entityManager->getRepository(Product::class);
$fetched = $repo->find($product->getId());
echo "Fetched Product: " . $fetched->getName() . "\n";
