<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasSeguimientoRespuestas
 *
 * @ORM\Table(name="campanas_seguimiento_respuestas")
 * @ORM\Entity
 */
class CampanasSeguimientoRespuestas
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @var string $ciudad
     *
     * @ORM\Column(name="ciudad", type="string", length=255, nullable=true)
     */
    private $ciudad;

    /**
     * @var text $preguntas
     *
     * @ORM\Column(name="preguntas", type="text", nullable=true)
     */
    private $preguntas;

    /**
     * @var string $timestamp
     *
     * @ORM\Column(name="timestamp", type="string", length=50, nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $campanaId
     *
     * @ORM\Column(name="campana_id", type="bigint", nullable=false)
     */
    private $campanaId;

    /**
     * @var string $usuarioUrl
     *
     * @ORM\Column(name="usuario_url", type="string", length=100, nullable=true)
     */
    private $usuarioUrl;

    /**
     * @var TiposSeguimientoRespuestas
     *
     * @ORM\ManyToOne(targetEntity="TiposSeguimientoRespuestas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_seguimiento_respuesta_id", referencedColumnName="id")
     * })
     */
    private $tipoSeguimientoRespuesta;



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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set ciudad
     *
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set preguntas
     *
     * @param text $preguntas
     */
    public function setPreguntas($preguntas)
    {
        $this->preguntas = $preguntas;
    }

    /**
     * Get preguntas
     *
     * @return text 
     */
    public function getPreguntas()
    {
        return $this->preguntas;
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
     * Set campanaId
     *
     * @param bigint $campanaId
     */
    public function setCampanaId($campanaId)
    {
        $this->campanaId = $campanaId;
    }

    /**
     * Get campanaId
     *
     * @return bigint 
     */
    public function getCampanaId()
    {
        return $this->campanaId;
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
     * Set tipoSeguimientoRespuesta
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposSeguimientoRespuestas $tipoSeguimientoRespuesta
     */
    public function setTipoSeguimientoRespuesta(\Tipddy\MasleadsBundle\Entity\TiposSeguimientoRespuestas $tipoSeguimientoRespuesta)
    {
        $this->tipoSeguimientoRespuesta = $tipoSeguimientoRespuesta;
    }

    /**
     * Get tipoSeguimientoRespuesta
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposSeguimientoRespuestas 
     */
    public function getTipoSeguimientoRespuesta()
    {
        return $this->tipoSeguimientoRespuesta;
    }
}