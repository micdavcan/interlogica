<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dolci
 *
 * @ORM\Table(name="dolci", indexes={@ORM\Index(name="fk_dolci_vendita1_idx", columns={"id_vendita"})})
 * @ORM\Entity
 */
class Dolci
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_dolce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDolce;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="prezzo", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $prezzo = '0.00';

    /**
     * @var \Vendita
     *
     * @ORM\ManyToOne(targetEntity="Vendita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendita", referencedColumnName="id_vendita")
     * })
     */
    private $idVendita;

    public function __toString() {
        return $this->nome;
    }

    public function getIdDolce(): ?int
    {
        return $this->idDolce;
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

    public function getPrezzo(): ?string
    {
        return $this->prezzo;
    }

    public function setPrezzo(string $prezzo): self
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    public function getIdVendita(): ?Vendita
    {
        return $this->idVendita;
    }

    public function setIdVendita(?Vendita $idVendita): self
    {
        $this->idVendita = $idVendita;

        return $this;
    }


}
