<?php

declare(strict_types=1);

namespace App\Shopping;

use App\Exceptions\NegativePriceException;

class Product
{
    public function __construct(
        private int $id,
        private string $name,
        private string $category,
        private float $price
    ) {
        if ($price < 0) {
            throw new NegativePriceException('No negative prices!');
        }
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getprice()
    {
        return $this->price;
    }
}
