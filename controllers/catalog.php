<?php

declare(strict_types=1);

function loadCatalog(): array
{
    $json = file_get_contents('products.json');
    $data = json_decode($json, true);
    return $data['catalog'] ?? [];
}
