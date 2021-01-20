<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Entity
{
    public function __construct(#[Assert\NotBlank] private string $foo)
    {
    }
}
