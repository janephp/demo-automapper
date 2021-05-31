<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Address;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class HomeController
{
    public function home(SerializerInterface $serializer): Response
    {
        $symfonyWorld = new Address();
        $symfonyWorld->name = 'SymfonyWorld Online 2021 Summer Edition';
        $symfonyWorld->address = 'https://live.symfony.com/2021-world/';

        $user = new User();
        $user->id = 20210617;
        $user->name = 'Symfony';
        $user->address = $symfonyWorld;

        return new Response(
            $serializer->serialize($user, 'json'),
            headers: ['Content-Type' => 'application/json']
        );
    }
}
