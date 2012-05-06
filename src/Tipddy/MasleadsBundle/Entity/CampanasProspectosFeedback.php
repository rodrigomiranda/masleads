<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasProspectosFeedback
 *
 * @ORM\Table(name="campanas_prospectos_feedback")
 * @ORM\Entity
 */
class CampanasProspectosFeedback
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
     * @var bigint $montoOportunidad
     *
     * @ORM\Column(name="monto_oportunidad", type="bigint", nullable=false)
     */
    private $montoOportunidad;

    /**
     * @var text $notaVenta
     *
     * @ORM\Column(name="nota_venta", type="text", nullable=false)
     */
    private $notaVenta;

    /**
     * @var string $timestamp
     *
     * @ORM\Column(name="timestamp", type="string", length=50, nullable=false)
     */
    private $timestamp;

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
     * @var TiposRespuestas
     *
     * @ORM\ManyToOne(targetEntity="TiposRespuestas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_respuesta_id", referencedColumnName="id")
     * })
     */
    private $tipoRespuesta;

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
     * Set montoOportunidad
     *
     * @param bigint $montoOportunidad
     */
    public function setMontoOportunidad($montoOportunidad)
    {
        $this->montoOportunidad = $montoOportunidad;
    }

    /**
     * Get montoOportunidad
     *
     * @return bigint 
     */
    public function getMontoOportunidad()
    {
        return $this->montoOportunidad;
    }

    /**
     * Set notaVenta
     *
     * @param text $notaVenta
     */
    public function setNotaVenta($notaVenta)
    {
        $this->notaVenta = $notaVenta;
    }

    /**
     * Get notaVenta
     *
     * @return text 
     */
    public function getNotaVenta()
    {
        return $this->notaVenta;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Get timestamp
     *
     * @return string 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
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
     * Set tipoRespuesta
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposRespuestas $tipoRespuesta
     */
    public function setTipoRespuesta(\Tipddy\MasleadsBundle\Entity\TiposRespuestas $tipoRespuesta)
    {
        $this->tipoRespuesta = $tipoRespuesta;
    }

    /**
     * Get tipoRespuesta
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposRespuestas 
     */
    public function getTipoRespuesta()
    {
        return $this->tipoRespuesta;
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