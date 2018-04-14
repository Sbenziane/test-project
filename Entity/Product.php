<?php

declare(strict_types=1);

namespace App\Entity;

use App\Exception\InvalidNameException;

use App\Entity\InvalidPriceException;

class Product
{
    private $name;
    private $description;
    private $price;

    public function __construct(string $name, string $description, float $price)
    {
        if (strlen($name) < 1) {
            throw new InvalidNameException();
        }
        $this->name = $name;
        $this->description = $description;
        if (!is_numeric($price))
        {
          throw new InvalidPriceException();

        }
        $this->price = $price;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getPrice() : float
    {
        return $this->price;
    }
}
