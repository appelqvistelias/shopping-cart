<?php

declare(strict_types=1);

require __DIR__ . '/../init.php';

use App\Shopping\Product;

function loadCatalog(): array
{
    $json = file_get_contents(__DIR__ . '/../data/products.json');
    $data = json_decode($json, true);

    if (!isset($data['catalog'])) {
        return [];
    }

    $products = [];
    foreach ($data['catalog'] as $item) {
        $products[] = new Product(
            $item['id'],
            $item['name'],
            $item['category'],
            $item['price']
        );
    }

    return $products;
}

$products = loadCatalog();
require __DIR__ . '/../views/catalog.view.php';
