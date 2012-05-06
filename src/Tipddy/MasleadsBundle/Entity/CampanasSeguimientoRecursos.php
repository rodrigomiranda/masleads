<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasSeguimientoRecursos
 *
 * @ORM\Table(name="campanas_seguimiento_recursos")
 * @ORM\Entity
 */
class CampanasSeguimientoRecursos
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
     * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
     */
    private $etiqueta;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

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
     * Set descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
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