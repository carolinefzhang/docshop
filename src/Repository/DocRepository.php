<?php
namespace App\Repository;
use App\Model\Doc;
use Psr\Log\LoggerInterface;
use App\Model\DocStatusEnum;

class DocRepository
{
    private array $docs = [];

    public function __construct(private LoggerInterface $logger)
    {
        // Initialize with some dummy data
        $this->docs = [
            new Doc(1, 'Document 1', 'Description of Document 1', 'http://example.com/doc1.pdf', DocStatusEnum::PUBLISHED, '2023-10-01', '2023-10-02'),
            new Doc(2, 'Document 2', 'Description of Document 2', 'http://example.com/doc2.pdf', DocStatusEnum::PUBLISHED, '2023-10-03', '2023-10-04'),
            // Add more documents as needed
        ];
        $this->logger = $logger;
    }    
    
    public function findAll(): array
    {
        $this->logger->info("Fetching documents from the API endpoint.");
        return $this->docs;
    }

    public function find(int $id): ?Doc
    {
        foreach ($this->docs as $doc) {
            if ($doc->getId() === $id) {
                return $doc;
            }
        }
        return null;
    }

}