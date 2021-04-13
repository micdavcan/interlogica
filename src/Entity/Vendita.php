<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendita
 *
 * @ORM\Table(name="vendita")
 * @ORM\Entity
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
     * @ORM\Column(name="disponibilità", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $disponibilità;

    /**
     * @var int
     *
     * @ORM\Column(name="dolci_id_dolce", type="integer", nullable=false)
     */
    private $dolciIdDolce;

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

    public function getDisponibilità(): ?int
    {
        return $this->disponibilità;
    }

    public function setDisponibilità(int $disponibilità): self
    {
        $this->disponibilità = $disponibilità;

        return $this;
    }

    public function getDolciIdDolce(): ?int
    {
        return $this->dolciIdDolce;
    }

    public function setDolciIdDolce(int $dolciIdDolce): self
    {
        $this->dolciIdDolce = $dolciIdDolce;

        return $this;
    }


}
