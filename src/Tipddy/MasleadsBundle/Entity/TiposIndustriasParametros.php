<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\TiposIndustriasParametros
 *
 * @ORM\Table(name="tipos_industrias_parametros")
 * @ORM\Entity
 */
class TiposIndustriasParametros
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
     * @var string $nombreCampo
     *
     * @ORM\Column(name="nombre_campo", type="string", length=50, nullable=false)
     */
    private $nombreCampo;

    /**
     * @var string $etiqueta
     *
     * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
     */
    private $etiqueta;

    /**
     * @var string $apartado
     *
     * @ORM\Column(name="apartado", type="string", length=100, nullable=true)
     */
    private $apartado;

    /**
     * @var TiposIndustrias
     *
     * @ORM\ManyToOne(targetEntity="TiposIndustrias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_industria_id", referencedColumnName="id")
     * })
     */
    private $tipoIndustria;



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
     * Set nombreCampo
     *
     * @param string $nombreCampo
     */
    public function setNombreCampo($nombreCampo)
    {
        $this->nombreCampo = $nombreCampo;
    }

    /**
     * Get nombreCampo
     *
     * @return string 
     */
    public function getNombreCampo()
    {
        return $this->nombreCampo;
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
     * Set apartado
     *
     * @param string $apartado
     */
    public function setApartado($apartado)
    {
        $this->apartado = $apartado;
    }

    /**
     * Get apartado
     *
     * @return string 
     */
    public function getApartado()
    {
        return $this->apartado;
    }

    /**
     * Set tipoIndustria
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposIndustrias $tipoIndustria
     */
    public function setTipoIndustria(\Tipddy\MasleadsBundle\Entity\TiposIndustrias $tipoIndustria)
    {
        $this->tipoIndustria = $tipoIndustria;
    }

    /**
     * Get tipoIndustria
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposIndustrias 
     */
    public function getTipoIndustria()
    {
        return $this->tipoIndustria;
    }
}