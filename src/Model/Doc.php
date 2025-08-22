<?php
namespace App\Model;
use App\Model\DocStatusEnum;

class Doc
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private string $downloadUrl,
        private DocStatusEnum $status = DocStatusEnum::DRAFT,
        private string $createdAt,
        private string $updatedAt
    )
    {

    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }
    public function getStatus(): DocStatusEnum
    {
        return $this->status;
    }
    public function getStatusValue(): string
    {
        return $this->status->value;
    }
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
}