<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\Paises
 *
 * @ORM\Table(name="paises")
 * @ORM\Entity
 */
class Paises
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

   /** 
    * @ORM\Column(name="isonum", type="integer", length=6)
    */
    private $isonum;
    
        
   /**
    * @ORM\Column(name="iso2", type="string", length=2, nullable=false)
    *
    */ 
    private $iso2;
    
    /**
     * @ORM\Column(name="iso3", type="string", length=3, nullable=false)
     *
     */
    private $iso3;
   
   
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
     * Set isonum
     *
     * @param integer $isonum
     */
    public function setIsonum($isonum)
    {
        $this->isonum = $isonum;
    }

    /**
     * Get isonum
     *
     * @return integer 
     */
    public function getIsonum()
    {
        return $this->isonum;
    }

    /**
     * Set iso2
     *
     * @param string $iso2
     */
    public function setIso2($iso2)
    {
        $this->iso2 = $iso2;
    }

    /**
     * Get iso2
     *
     * @return string 
     */
    public function getIso2()
    {
        return $this->iso2;
    }

    /**
     * Set iso3
     *
     * @param string $iso3
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;
    }

    /**
     * Get iso3
     *
     * @return string 
     */
    public function getIso3()
    {
        return $this->iso3;
    }
}