<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\VendedoresProspectos
 *
 * @ORM\Table(name="vendedores_prospectos")
 * @ORM\Entity
 */
class VendedoresProspectos
{
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bigint $vendedorId
     *
     * @ORM\Column(name="vendedor_id", type="bigint", nullable=false)
     */
    private $vendedorId;

    /**
     * @var bigint $prospectoId
     *
     * @ORM\Column(name="prospecto_id", type="bigint", nullable=false)
     */
    private $prospectoId;



    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vendedorId
     *
     * @param bigint $vendedorId
     */
    public function setVendedorId($vendedorId)
    {
        $this->vendedorId = $vendedorId;
    }

    /**
     * Get vendedorId
     *
     * @return bigint 
     */
    public function getVendedorId()
    {
        return $this->vendedorId;
    }

    /**
     * Set prospectoId
     *
     * @param bigint $prospectoId
     */
    public function setProspectoId($prospectoId)
    {
        $this->prospectoId = $prospectoId;
    }

    /**
     * Get prospectoId
     *
     * @return bigint 
     */
    public function getProspectoId()
    {
        return $this->prospectoId;
    }
}