<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\DocRepository;


class DocController extends AbstractController
{
    #[Route('/docs/{id<\d+>}', name: 'app_doc_viewdoc')]
    public function viewDoc(int $id, DocRepository $repository): Response
    {
        // Logic for viewing a document by ID
        $doc = $repository->find($id);

        if (!$doc) {
            throw $this->createNotFoundException('Document not found');
        }

        return $this->render('doc/view.html.twig', [
            'doc' => $doc,
        ]);
    }
    
    public function createDoc()
    {
        // Logic for creating a document
    }

    public function updateDoc(int $id)
    {
        // Logic for updating a document by ID
    }

    public function deleteDoc(int $id)
    {
        // Logic for deleting a document by ID
    }
}