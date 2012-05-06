<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasSeguimiento
 *
 * @ORM\Table(name="campanas_seguimiento")
 * @ORM\Entity
 */
class CampanasSeguimiento
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
     * @var string $timestamp
     *
     * @ORM\Column(name="timestamp", type="string", length=50, nullable=true)
     */
    private $timestamp;

    /**
     * @var datetime $fechaHora
     *
     * @ORM\Column(name="fecha_hora", type="datetime", nullable=false)
     */
    private $fechaHora;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;

    /**
     * @var string $hostname
     *
     * @ORM\Column(name="hostname", type="string", length=150, nullable=true)
     */
    private $hostname;

    /**
     * @var text $urlVisitado
     *
     * @ORM\Column(name="url_visitado", type="text", nullable=true)
     */
    private $urlVisitado;

    /**
     * @var string $agente
     *
     * @ORM\Column(name="agente", type="string", length=255, nullable=true)
     */
    private $agente;

    /**
     * @var text $referencia
     *
     * @ORM\Column(name="referencia", type="text", nullable=true)
     */
    private $referencia;

    /**
     * @var string $os
     *
     * @ORM\Column(name="os", type="string", length=15, nullable=true)
     */
    private $os;

    /**
     * @var string $browser
     *
     * @ORM\Column(name="browser", type="string", length=50, nullable=true)
     */
    private $browser;

    /**
     * @var string $lenguaje
     *
     * @ORM\Column(name="lenguaje", type="string", length=5, nullable=true)
     */
    private $lenguaje;

    /**
     * @var string $screen
     *
     * @ORM\Column(name="screen", type="string", length=15, nullable=true)
     */
    private $screen;

    /**
     * @var string $codigoAvisoVendedor
     *
     * @ORM\Column(name="codigo_aviso_vendedor", type="string", length=100, nullable=true)
     */
    private $codigoAvisoVendedor;

    /**
     * @var string $usuarioUrl
     *
     * @ORM\Column(name="usuario_url", type="string", length=100, nullable=true)
     */
    private $usuarioUrl;

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
     * Set fechaHora
     *
     * @param datetime $fechaHora
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;
    }

    /**
     * Get fechaHora
     *
     * @return datetime 
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * Set ip
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set urlVisitado
     *
     * @param text $urlVisitado
     */
    public function setUrlVisitado($urlVisitado)
    {
        $this->urlVisitado = $urlVisitado;
    }

    /**
     * Get urlVisitado
     *
     * @return text 
     */
    public function getUrlVisitado()
    {
        return $this->urlVisitado;
    }

    /**
     * Set agente
     *
     * @param string $agente
     */
    public function setAgente($agente)
    {
        $this->agente = $agente;
    }

    /**
     * Get agente
     *
     * @return string 
     */
    public function getAgente()
    {
        return $this->agente;
    }

    /**
     * Set referencia
     *
     * @param text $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * Get referencia
     *
     * @return text 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set os
     *
     * @param string $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set browser
     *
     * @param string $browser
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    }

    /**
     * Get browser
     *
     * @return string 
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set lenguaje
     *
     * @param string $lenguaje
     */
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;
    }

    /**
     * Get lenguaje
     *
     * @return string 
     */
    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    /**
     * Set screen
     *
     * @param string $screen
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }

    /**
     * Get screen
     *
     * @return string 
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * Set codigoAvisoVendedor
     *
     * @param string $codigoAvisoVendedor
     */
    public function setCodigoAvisoVendedor($codigoAvisoVendedor)
    {
        $this->codigoAvisoVendedor = $codigoAvisoVendedor;
    }

    /**
     * Get codigoAvisoVendedor
     *
     * @return string 
     */
    public function getCodigoAvisoVendedor()
    {
        return $this->codigoAvisoVendedor;
    }

    /**
     * Set usuarioUrl
     *
     * @param string $usuarioUrl
     */
    public function setUsuarioUrl($usuarioUrl)
    {
        $this->usuarioUrl = $usuarioUrl;
    }

    /**
     * Get usuarioUrl
     *
     * @return string 
     */
    public function getUsuarioUrl()
    {
        return $this->usuarioUrl;
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