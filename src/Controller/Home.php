<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController
{
    #[Route('/')]
    #[Template('home.html.twig')]
    public function getContent(): array
    {
        return [
            'page_content' => 'This is where page content will go'
        ];
    }
}