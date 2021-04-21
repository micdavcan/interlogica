<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\DolciRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dolci
 *
 * @ORM\Table(name="dolci")
 * @ORM\Entity(repositoryClass=DolciRepository::class)
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
     * @ORM\Column(name="foto_nome_file", type="string", length=100, nullable=true)
     */
    private $foto;

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

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

}
