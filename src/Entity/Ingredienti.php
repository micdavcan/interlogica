<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredienti
 *
 * @ORM\Table(name="ingredienti", indexes={@ORM\Index(name="fk_ingredienti_dolci1_idx", columns={"id_dolce"})})
 * @ORM\Entity
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
    private $quantità = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unità_misura", type="string", length=15, nullable=true)
     */
    private $unitàMisura;

    /**
     * @var \Dolci
     *
     * @ORM\ManyToOne(targetEntity="Dolci")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dolce", referencedColumnName="id_dolce")
     * })
     */
    private $idDolce;

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

    public function getQuantità(): ?int
    {
        return $this->quantità;
    }

    public function setQuantità(?int $quantità): self
    {
        $this->quantità = $quantità;

        return $this;
    }

    public function getUnitàMisura(): ?string
    {
        return $this->unitàMisura;
    }

    public function setUnitàMisura(?string $unitàMisura): self
    {
        $this->unitàMisura = $unitàMisura;

        return $this;
    }

    public function getIdDolce(): ?Dolci
    {
        return $this->idDolce;
    }

    public function setIdDolce(?Dolci $idDolce): self
    {
        $this->idDolce = $idDolce;

        return $this;
    }


}
