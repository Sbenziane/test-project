<?php

declare(strict_types=1);

namespace App\Exception;

use DomainException;

class InvalidPriceException extends DomainException
{
    public function __construct()
    {
        parent::__construct('Le prix est invalide');
    }
}
