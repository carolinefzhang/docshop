<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\DocRepository;

#[Route('/api/docs')]
class DocApiController extends AbstractController
{
    #[Route('/', methods: ['GET'])]
    public function getDocs(DocRepository $repository): Response
    {
        
        // This method can be used to fetch and return documents in JSON format.
        $docs = $repository->findAll();

        return $this->json($docs);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function getDoc(int $id, DocRepository $repository): Response
    {
        // This method can be used to fetch a specific document by ID.
        $doc = $repository->find($id);

        if (!$doc) {
            throw $this->createNotFoundException('Document not found');
        }

        return $this->json($doc);
    }
}