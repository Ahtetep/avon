<?php

namespace App\Entity;

use App\Repository\CatalogRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=CatalogRepository::class)
 * @Vich\Uploadable()
 */
class Catalog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $catalog;

    /**
     * @Vich\UploadableField(mapping="item_catalog", fileNameProperty="catalog")
     */
    private $catalogFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleImage;

    /**
     * @Vich\UploadableField(mapping="item_catalog", fileNameProperty="titleImage")
     */
    private $titleImageFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $catalogDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCatalog(): ?string
    {
        return $this->catalog;
    }

    /**
     * @param string|null $catalog
     * @return $this
     */
    public function setCatalog(?string $catalog): self
    {
        $this->catalog = $catalog;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCatalogFile()
    {
        return $this->catalogFile;
    }

    /**
     * @return mixed
     */
    public function getTitleImage()
    {
        return $this->titleImage;
    }

    /**
     * @param mixed $titleImage
     */
    public function setTitleImage($titleImage): void
    {
        $this->titleImage = $titleImage;
    }

    /**
     * @return mixed
     */
    public function getTitleImageFile()
    {
        return $this->titleImageFile;
    }

    /**
     * @param mixed $titleImageFile
     */
    public function setTitleImageFile($titleImageFile): void
    {
        $this->titleImageFile = $titleImageFile;
    }

    /**
     * @param mixed $catalogFile
     */
    public function setCatalogFile($catalogFile): void
    {
        $this->catalogFile = $catalogFile;
    }

    public function getCatalogDate(): ?\DateTimeInterface
    {
        return $this->catalogDate;
    }

    public function setCatalogDate(\DateTimeInterface $catalogDate): self
    {
        $this->catalogDate = $catalogDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
