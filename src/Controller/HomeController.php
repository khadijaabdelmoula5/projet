<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
<<<<<<< HEAD
    #[Route('/', name: 'app_home')]
=======
    #[Route('', name: 'app_home')]
>>>>>>> 825f4e3a8f436767309dfde11386e1e66dc7c0c9
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
