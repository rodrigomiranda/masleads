<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasSeguimientoPaginas
 *
 * @ORM\Table(name="campanas_seguimiento_paginas")
 * @ORM\Entity
 */
class CampanasSeguimientoPaginas
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
     * @var string $etiqueta
     *
     * @ORM\Column(name="etiqueta", type="string", length=60, nullable=false)
     */
    private $etiqueta;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=250, nullable=false)
     */
    private $url;

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
     * Set etiqueta
     *
     * @param string $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
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