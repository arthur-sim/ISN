<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PublicationRepository")
 */
class Publication {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\ManyToMany(targetEntity="Sport", cascade={"persist"})
     */
    private $sports;

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitre(): ?string {
        return $this->titre;
    }

    public function setTitre(string $titre): self {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string {
        return $this->Description;
    }

    public function setDescription(string $Description): self {
        $this->Description = $Description;

        return $this;
    }
    
    public function addSport(Sport $sport)
  {
    $this->sports[] = $sport;
  }

  public function removeSport(Sport $sport)
  {
    $this->sports->removeElement($sport);
  }

  public function getSports()
  {
    return $this->sports;
  }



}
