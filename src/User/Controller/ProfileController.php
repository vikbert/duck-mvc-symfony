<?php

declare(strict_types = 1);

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ProfileController extends AbstractController
{
    public function __invoke(): Response
    {
        return new Response('profile controller');
    }
}