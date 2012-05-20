<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\EnviosInformacion
 *
 * @ORM\Table(name="envios_informacion")
 * @ORM\Entity(repositoryClass="Tipddy\MasleadsBundle\Entity\EnviosInformacionRepository")
 */
class EnviosInformacion
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
     * @var text $informacion
     *
     * @ORM\Column(name="informacion", type="text", nullable=false)
     */
    private $informacion;

    /**
     * @var TiposEnvioInformacion
     *
     * @ORM\ManyToOne(targetEntity="TiposEnvioInformacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_envio_informacion_id", referencedColumnName="id")
     * })
     */
    private $tipoEnvioInformacion;

    /**
     * @var Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set informacion
     *
     * @param text $informacion
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    }

    /**
     * Get informacion
     *
     * @return text 
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set tipoEnvioInformacion
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposEnvioInformacion $tipoEnvioInformacion
     */
    public function setTipoEnvioInformacion(\Tipddy\MasleadsBundle\Entity\TiposEnvioInformacion $tipoEnvioInformacion)
    {
        $this->tipoEnvioInformacion = $tipoEnvioInformacion;
    }

    /**
     * Get tipoEnvioInformacion
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposEnvioInformacion 
     */
    public function getTipoEnvioInformacion()
    {
        return $this->tipoEnvioInformacion;
    }

    /**
     * Set usuario
     *
     * @param Tipddy\MasleadsBundle\Entity\Usuarios $usuario
     */
    public function setUsuario(\Tipddy\MasleadsBundle\Entity\Usuarios $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Tipddy\MasleadsBundle\Entity\Usuarios 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}