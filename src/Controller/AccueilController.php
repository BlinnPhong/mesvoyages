<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author blinnphong
 */
class AccueilController {
   
    #[Route('/', name:'acceuil')]
    public function index(): Response {
        return new Response('Hello world !');
    }
}
