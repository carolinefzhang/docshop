<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $num_of_docs = 10;
        return $this->render('main/index.html.twig', [
            'num_of_docs' => $num_of_docs,
        ]);
    }

    public function about()
    {
        // This method can be used to display information about the application.
        return 'This is the About page of the Main Controller.';
    }
}
