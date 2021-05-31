<?php

declare(strict_types=1);

namespace App\Entity;

final class User
{
    public int $id;
    public string $name;
    public Address $address;
}
