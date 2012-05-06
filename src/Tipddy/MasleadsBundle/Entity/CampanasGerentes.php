<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasGerentes
 *
 * @ORM\Table(name="campanas_gerentes")
 * @ORM\Entity
 */
class CampanasGerentes
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
     * @var Campanas
     *
     * @ORM\ManyToOne(targetEntity="Campanas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campana_id", referencedColumnName="id")
     * })
     */
    private $campana;

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