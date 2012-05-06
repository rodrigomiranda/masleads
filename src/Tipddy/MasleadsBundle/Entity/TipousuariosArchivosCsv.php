<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\TipousuariosArchivosCsv
 *
 * @ORM\Table(name="tipousuarios_archivos_csv")
 * @ORM\Entity
 */
class TipousuariosArchivosCsv
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var datetime $fechaSubida
     *
     * @ORM\Column(name="fecha_subida", type="datetime", nullable=false)
     */
    private $fechaSubida;

    /**
     * @var TiposUsuarios
     *
     * @ORM\ManyToOne(targetEntity="TiposUsuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_usuario_id", referencedColumnName="id")
     * })
     */
    private $tipoUsuario;

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
     * Set fechaSubida
     *
     * @param datetime $fechaSubida
     */
    public function setFechaSubida($fechaSubida)
    {
        $this->fechaSubida = $fechaSubida;
    }

    /**
     * Get fechaSubida
     *
     * @return datetime 
     */
    public function getFechaSubida()
    {
        return $this->fechaSubida;
    }

    /**
     * Set tipoUsuario
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposUsuarios $tipoUsuario
     */
    public function setTipoUsuario(\Tipddy\MasleadsBundle\Entity\TiposUsuarios $tipoUsuario)
    {
        $this->tipoUsuario = $tipoUsuario;
    }

    /**
     * Get tipoUsuario
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposUsuarios 
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
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