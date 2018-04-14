<?php

declare(strict_types=1);

namespace App\Exception;

use DomainException;

class InvalidNameException extends DomainException
{
    public function __construct()
    {
        parent::__construct('Le nom est invalide');
    }
}
