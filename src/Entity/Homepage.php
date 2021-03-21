<?php

namespace App\Entity;

use App\Repository\HomepageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomepageRepository::class)
 */
class Homepage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bannerTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bannerContent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlBottomText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContainerTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContainerDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBannerTitle(): ?string
    {
        return $this->bannerTitle;
    }

    public function setBannerTitle(string $bannerTitle): self
    {
        $this->bannerTitle = $bannerTitle;

        return $this;
    }

    public function getBannerContent(): ?string
    {
        return $this->bannerContent;
    }

    public function setBannerContent(string $bannerContent): self
    {
        $this->bannerContent = $bannerContent;

        return $this;
    }

    public function getUrlBottomText(): ?string
    {
        return $this->urlBottomText;
    }

    public function setUrlBottomText(string $urlBottomText): self
    {
        $this->urlBottomText = $urlBottomText;

        return $this;
    }

    public function getContainerTitle(): ?string
    {
        return $this->ContainerTitle;
    }

    public function setContainerTitle(string $ContainerTitle): self
    {
        $this->ContainerTitle = $ContainerTitle;

        return $this;
    }

    public function getContainerDescription(): ?string
    {
        return $this->ContainerDescription;
    }

    public function setContainerDescription(string $ContainerDescription): self
    {
        $this->ContainerDescription = $ContainerDescription;

        return $this;
    }
}
