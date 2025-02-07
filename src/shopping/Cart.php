<?php

declare(strict_types=1);

namespace App\Shopping;

use App\Shopping\Product;

class Cart
{
    private array $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem(Product $product)
    {
        $this->items[] = $product;
    }

    public function removeItem(Product $product)
    {
        $this->items = array_filter($this->items, function ($item) use ($product) {
            return $item !== $product;
        });
    }

    public function emptyCart()
    {
        $this->items = [];
    }
}
