<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasVendedorProspectos
 *
 * @ORM\Table(name="campanas_vendedor_prospectos")
 * @ORM\Entity
 */
class CampanasVendedorProspectos
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
     * @var CampanasVendedores
     *
     * @ORM\ManyToOne(targetEntity="CampanasVendedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campana_vendedor_id", referencedColumnName="id")
     * })
     */
    private $campanaVendedor;

    /**
     * @var CampanasProspectos
     *
     * @ORM\ManyToOne(targetEntity="CampanasProspectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campana_prospecto_id", referencedColumnName="id")
     * })
     */
    private $campanaProspecto;

    /**
     * @var Campanas
     *
     * @ORM\ManyToOne(targetEntity="Campanas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campana_id", referencedColumnName="id")
     * })
     */
    private $campana;



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
     * Set campanaVendedor
     *
     * @param Tipddy\MasleadsBundle\Entity\CampanasVendedores $campanaVendedor
     */
    public function setCampanaVendedor(\Tipddy\MasleadsBundle\Entity\CampanasVendedores $campanaVendedor)
    {
        $this->campanaVendedor = $campanaVendedor;
    }

    /**
     * Get campanaVendedor
     *
     * @return Tipddy\MasleadsBundle\Entity\CampanasVendedores 
     */
    public function getCampanaVendedor()
    {
        return $this->campanaVendedor;
    }

    /**
     * Set campanaProspecto
     *
     * @param Tipddy\MasleadsBundle\Entity\CampanasProspectos $campanaProspecto
     */
    public function setCampanaProspecto(\Tipddy\MasleadsBundle\Entity\CampanasProspectos $campanaProspecto)
    {
        $this->campanaProspecto = $campanaProspecto;
    }

    /**
     * Get campanaProspecto
     *
     * @return Tipddy\MasleadsBundle\Entity\CampanasProspectos 
     */
    public function getCampanaProspecto()
    {
        return $this->campanaProspecto;
    }

    /**
     * Set campana
     *
     * @param Tipddy\MasleadsBundle\Entity\Campanas $campana
     */
    public function setCampana(\Tipddy\MasleadsBundle\Entity\Campanas $campana)
    {
        $this->campana = $campana;
    }

    /**
     * Get campana
     *
     * @return Tipddy\MasleadsBundle\Entity\Campanas 
     */
    public function getCampana()
    {
        return $this->campana;
    }
}