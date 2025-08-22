<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\DocRepository;

class MainController extends AbstractController
{
    #[Route('/')]
    public function index(DocRepository $repository): Response
    {
        $docs = $repository->findAll();
        $my_doc = $docs[array_rand($docs)];
        return $this->render('main/index.html.twig', [
            'docs' => $docs,
            'my_doc' => $my_doc,
        ]);
    }

    public function about()
    {
        // This method can be used to display information about the application.
        return 'This is the About page of the Main Controller.';
    }
}
