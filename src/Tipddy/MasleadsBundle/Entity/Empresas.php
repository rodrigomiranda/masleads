<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity
 */
class Empresas
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
     * @var string $rut
     *
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     */
    private $rut;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var Regiones
     *
     * @ORM\ManyToOne(targetEntity="Regiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region", referencedColumnName="id")
     * })
     */
    private $region;

    /**
     * @var Provincias
     *
     * @ORM\ManyToOne(targetEntity="Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var Organizaciones
     *
     * @ORM\ManyToOne(targetEntity="Organizaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organizacion_id", referencedColumnName="id")
     * })
     */
    private $organizacion;



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
     * Set rut
     *
     * @param string $rut
     */
    public function setRut($rut)
    {
        $this->rut = $rut;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
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
     * @param Tipddy\MasleadsBundle\Entity\Provincias $provincia
     */
    public function setProvincia(\Tipddy\MasleadsBundle\Entity\Provincias $provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return Tipddy\MasleadsBundle\Entity\Provincias 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set organizacion
     *
     * @param Tipddy\MasleadsBundle\Entity\Organizaciones $organizacion
     */
    public function setOrganizacion(\Tipddy\MasleadsBundle\Entity\Organizaciones $organizacion)
    {
        $this->organizacion = $organizacion;
    }

    /**
     * Get organizacion
     *
     * @return Tipddy\MasleadsBundle\Entity\Organizaciones 
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }
}