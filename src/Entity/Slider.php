<?php

namespace App\Entity;

use App\Repository\SliderRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=SliderRepository::class)
 * @Vich\Uploadable()
 */
class Slider
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $buttonName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ButtonUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $background;

    /**
     * @Vich\UploadableField(mapping="item_background", fileNameProperty="background")
     */
    private $backgroundFile;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isUsed;

    /**
     * @ORM\Column(type="datetime", nullable=true)
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getButtonName(): ?string
    {
        return $this->buttonName;
    }

    public function setButtonName(?string $buttonName): self
    {
        $this->buttonName = $buttonName;

        return $this;
    }

    public function getButtonUrl(): ?string
    {
        return $this->ButtonUrl;
    }

    public function setButtonUrl(?string $ButtonUrl): self
    {
        $this->ButtonUrl = $ButtonUrl;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(?string $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackgroundFile()
    {
        return $this->backgroundFile;
    }

    /**
     * @param mixed $backgroundFile
     */
    public function setBackgroundFile($backgroundFile): void
    {
        $this->backgroundFile = $backgroundFile;
    }

    public function getIsUsed(): ?bool
    {
        return $this->isUsed;
    }

    public function setIsUsed(?bool $isUsed): self
    {
        $this->isUsed = $isUsed;

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
