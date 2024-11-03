<?php

namespace App\Controller;

use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class User extends AbstractController
{
    #[Route('/user/login')]
    public function login(UserService $userService): Response
    {
        return new Response(
            '<html><body>Lucky number: '. rand() .'</body></html>'
        );
    }
}
