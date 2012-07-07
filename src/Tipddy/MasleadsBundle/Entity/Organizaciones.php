<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tipddy\MasleadsBundle\Entity\Organizaciones
 *
 * @ORM\Table(name="organizaciones")
 * @ORM\Entity(repositoryClass="Tipddy\MasleadsBundle\Entity\OrganizacionesRepository")
 */
class Organizaciones
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
     * @Assert\NotBlank()
     */
    private $etiqueta;

    /**
     * @var string $rut
     *
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     * @Assert\NotBlank()
     */
    private $rut;

    /**
     * @var text $giro
     *
     * @ORM\Column(name="giro", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $giro;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $direccion;

  
    /**
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $pais;

    /**
     * @var boolean $estado
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    


    public function __toString()
    {
       return $this->getEtiqueta();
    
    }


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
     * Set giro
     *
     * @param text $giro
     */
    public function setGiro($giro)
    {
        $this->giro = $giro;
    }

    /**
     * Get giro
     *
     * @return text 
     */
    public function getGiro()
    {
        return $this->giro;
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
     * Set pais
     *
     * @param string $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }


    public function getNombreEstado()
    {
	    return $this->getEstado() == 0 ? 'Desactiva' : 'Activa';
	    
    }


 }