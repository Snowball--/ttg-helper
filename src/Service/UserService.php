<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\UserRepository;

class UserService
{
    public function __construct(private readonly UserRepository $userRepository)
    {
    }
}
