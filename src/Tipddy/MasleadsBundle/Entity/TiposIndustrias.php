<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\TiposIndustrias
 *
 * @ORM\Table(name="tipos_industrias")
 * @ORM\Entity
 */
class TiposIndustrias
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
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
     * @var string $formulario
     *
     * @ORM\Column(name="formulario", type="string", length=255, nullable=false)
     */
    private $formulario;




    public function __toString()
    {
	    return $this->getEtiqueta();
	    
    }

    /**
     * Get id
     *
     * @return integer 
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
     * Set formulario
     *
     * @param string $formulario
     */
    public function setFormulario($formulario)
    {
        $this->formulario = $formulario;
    }

    /**
     * Get formulario
     *
     * @return string 
     */
    public function getFormulario()
    {
        return $this->formulario;
    }
}