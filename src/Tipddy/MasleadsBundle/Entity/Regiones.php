<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\Regiones
 *
 * @ORM\Table(name="regiones")
 * @ORM\Entity
 */
class Regiones
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
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=12, nullable=false)
     */
    private $numero;

    /**
     * @var string $region
     *
     * @ORM\Column(name="region", type="string", length=250, nullable=false)
     */
    private $region;

    /**
     * @var string $capital
     *
     * @ORM\Column(name="capital", type="string", length=250, nullable=false)
     */
    private $capital;

    /**
     * @var integer $paisId
     *
     * @ORM\Column(name="pais_id", type="integer", nullable=false)
     */
    private $paisId;



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
     * Set numero
     *
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set capital
     *
     * @param string $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * Get capital
     *
     * @return string 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set paisId
     *
     * @param integer $paisId
     */
    public function setPaisId($paisId)
    {
        $this->paisId = $paisId;
    }

    /**
     * Get paisId
     *
     * @return integer 
     */
    public function getPaisId()
    {
        return $this->paisId;
    }
}