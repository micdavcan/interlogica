<?php

namespace App\Entity;

use App\Repository\VenditaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vendita
 *
 * @ORM\Table(name="vendita", indexes={@ORM\Index(name="fk_vendita_dolci1_idx", columns={"id_dolce"})})
 * @ORM\Entity(repositoryClass=VenditaRepository::class)
 */
class Vendita
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vendita", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVendita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="disponibilita", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $disponibilita;

    /**
     * @var \Dolci
     *
     * @ORM\ManyToOne(targetEntity="Dolci")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dolce", referencedColumnName="id_dolce")
     * })
     */
    private $Dolce;
/*
    public function __toString() {
        return $this->disponibilita;
    }
*/       
    public function getIdVendita(): ?int
    {
        return $this->idVendita;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getDisponibilita(): ?int
    {
        return $this->disponibilita;
    }

    public function setDisponibilita(int $disponibilita): self
    {
        $this->disponibilita = $disponibilita;

        return $this;
    }

    public function getDolce(): ?Dolci
    {
        return $this->Dolce;
    }

    public function setDolce(?Dolci $idDolce): self
    {
        $this->Dolce = $idDolce;

        return $this;
    }

}
