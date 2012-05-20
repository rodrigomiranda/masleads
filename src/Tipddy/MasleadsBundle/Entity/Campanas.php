<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\Campanas
 *
 * @ORM\Table(name="campanas")
 * @ORM\Entity(repositoryClass="Tipddy\MasleadsBundle\Entity\CampanasRepository")
 */
class Campanas
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
     * @var date $fechaInicio
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var date $fechaTermino
     *
     * @ORM\Column(name="fecha_termino", type="date", nullable=false)
     */
    private $fechaTermino;

    /**
     * @var boolean $periodoPrueba
     *
     * @ORM\Column(name="periodo_prueba", type="boolean", nullable=false)
     */
    private $periodoPrueba;

    /**
     * @var date $fechaInicioPrueba
     *
     * @ORM\Column(name="fecha_inicio_prueba", type="date", nullable=true)
     */
    private $fechaInicioPrueba;

    /**
     * @var date $fechaTerminoPrueba
     *
     * @ORM\Column(name="fecha_termino_prueba", type="date", nullable=true)
     */
    private $fechaTerminoPrueba;

    /**
     * @var string $sitioWeb
     *
     * @ORM\Column(name="sitio_web", type="string", length=255, nullable=false)
     */
    private $sitioWeb;

    /**
     * @var string $apiKey
     *
     * @ORM\Column(name="api_key", type="string", length=255, nullable=true)
     */
    private $apiKey;

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
     * @var TiposIndustrias
     *
     * @ORM\ManyToOne(targetEntity="TiposIndustrias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="industria", referencedColumnName="id")
     * })
     */
    private $industria;



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
     * Set fechaInicio
     *
     * @param date $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * Get fechaInicio
     *
     * @return date 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    
 
    /**
     * Set fechaTermino
     *
     * @param date $fechaTermino
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;
    }

    /**
     * Get fechaTermino
     *
     * @return date 
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    /**
     * Set periodoPrueba
     *
     * @param boolean $periodoPrueba
     */
    public function setPeriodoPrueba($periodoPrueba)
    {
        $this->periodoPrueba = $periodoPrueba;
    }

    /**
     * Get periodoPrueba
     *
     * @return boolean 
     */
    public function getPeriodoPrueba()
    {
        return $this->periodoPrueba;
    }

    /**
     * Set fechaInicioPrueba
     *
     * @param date $fechaInicioPrueba
     */
    public function setFechaInicioPrueba($fechaInicioPrueba)
    {
        $this->fechaInicioPrueba = $fechaInicioPrueba;
    }

    /**
     * Get fechaInicioPrueba
     *
     * @return date 
     */
    public function getFechaInicioPrueba()
    {
        return $this->fechaInicioPrueba;
    }

    /**
     * Set fechaTerminoPrueba
     *
     * @param date $fechaTerminoPrueba
     */
    public function setFechaTerminoPrueba($fechaTerminoPrueba)
    {
        $this->fechaTerminoPrueba = $fechaTerminoPrueba;
    }

    /**
     * Get fechaTerminoPrueba
     *
     * @return date 
     */
    public function getFechaTerminoPrueba()
    {
        return $this->fechaTerminoPrueba;
    }

    /**
     * Set sitioWeb
     *
     * @param string $sitioWeb
     */
    public function setSitioWeb($sitioWeb)
    {
        $this->sitioWeb = $sitioWeb;
    }

    /**
     * Get sitioWeb
     *
     * @return string 
     */
    public function getSitioWeb()
    {
        return $this->sitioWeb;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get apiKey
     *
     * @return string 
     */
    public function getApiKey()
    {
        return $this->apiKey;
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

    /**
     * Set industria
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposIndustrias $industria
     */
    public function setIndustria(\Tipddy\MasleadsBundle\Entity\TiposIndustrias $industria)
    {
        $this->industria = $industria;
    }

    /**
     * Get industria
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposIndustrias 
     */
    public function getIndustria()
    {
        return $this->industria;
    }
}