<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredienti
 *
 * @ORM\Table(name="ingredienti", indexes={@ORM\Index(name="fk_ingredienti_dolci_idx", columns={"id_dolce"})})
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
     * @var string
     *
     * @ORM\Column(name="quantità", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $quantità = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="unità_misura", type="string", length=15, nullable=false)
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

    public function getQuantità(): ?string
    {
        return $this->quantità;
    }

    public function setQuantità(string $quantità): self
    {
        $this->quantità = $quantità;

        return $this;
    }

    public function getUnitàMisura(): ?string
    {
        return $this->unitàMisura;
    }

    public function setUnitàMisura(string $unitàMisura): self
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
