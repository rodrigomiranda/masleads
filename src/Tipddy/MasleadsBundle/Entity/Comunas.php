<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\Comunas
 *
 * @ORM\Table(name="comunas")
 * @ORM\Entity
 */
class Comunas
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
     * @var bigint $comunaId
     *
     * @ORM\Column(name="comuna_id", type="bigint", nullable=true)
     */
    private $comunaId;

    /**
     * @var string $comuna
     *
     * @ORM\Column(name="comuna", type="string", length=250, nullable=true)
     */
    private $comuna;

    /**
     * @var Regiones
     *
     * @ORM\ManyToOne(targetEntity="Regiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;

    /**
     * @var Comunas
     *
     * @ORM\ManyToOne(targetEntity="Comunas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;



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
     * Set comunaId
     *
     * @param bigint $comunaId
     */
    public function setComunaId($comunaId)
    {
        $this->comunaId = $comunaId;
    }

    /**
     * Get comunaId
     *
     * @return bigint 
     */
    public function getComunaId()
    {
        return $this->comunaId;
    }

    /**
     * Set comuna
     *
     * @param string $comuna
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;
    }

    /**
     * Get comuna
     *
     * @return string 
     */
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set region
     *
     * @param Tipddy\MasleadsBundle\Entity\Regiones $region
     */
    public function setRegion(\Tipddy\MasleadsBundle\Entity\Regiones $region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return Tipddy\MasleadsBundle\Entity\Regiones 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set provincia
     *
     * @param Tipddy\MasleadsBundle\Entity\Comunas $provincia
     */
    public function setProvincia(\Tipddy\MasleadsBundle\Entity\Comunas $provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return Tipddy\MasleadsBundle\Entity\Comunas 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}