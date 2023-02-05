<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('lucky/number', name:'app_lucky_number')]
    public function number(): Response 
    {
        $number = random_int(0, 100);

        return new Response(
            "<html>
                <h1>$number</h1>
            </html>"
        );
    }
}

