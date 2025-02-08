<?php

declare(strict_types=1);

function loadCatalog(): array
{
    $json = file_get_contents(__DIR__ . 'data/products.json');
    $data = json_decode($json, true);
    return $data['catalog'] ?? [];
}
