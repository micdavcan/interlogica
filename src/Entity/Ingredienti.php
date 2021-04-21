<?php

namespace App\Entity;

use App\Repository\IngredientiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredienti
 *
 * @ORM\Table(name="ingredienti", indexes={@ORM\Index(name="fk_ingredienti_dolci1_idx", columns={"id_dolce"})})
 * @ORM\Entity(repositoryClass=IngredientiRepository::class)
 */
class Ingredienti
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ingrediente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngrediente;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantità", type="smallint", nullable=true)
     */
    private $quantita = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unità_misura", type="string", length=15, nullable=true)
     */
    private $unitaMisura;

    /**
     * @var \Dolci
     *
     * @ORM\ManyToOne(targetEntity="Dolci")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dolce", referencedColumnName="id_dolce")
     * })
     */
    private $Dolce;

    public function __toString() {
        return $this->nome;
    }

    public function getIdIngrediente(): ?int
    {
        return $this->idIngrediente;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getquantita(): ?int
    {
        return $this->quantita;
    }

    public function setquantita(?int $quantita): self
    {
        $this->quantita = $quantita;

        return $this;
    }

    public function getunitaMisura(): ?string
    {
        return $this->unitaMisura;
    }

    public function setunitaMisura(?string $unitaMisura): self
    {
        $this->unitaMisura = $unitaMisura;

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
