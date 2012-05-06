<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\CampanasProspectosFeedbackParametros
 *
 * @ORM\Table(name="campanas_prospectos_feedback_parametros")
 * @ORM\Entity
 */
class CampanasProspectosFeedbackParametros
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
     * @var CampanasProspectosFeedback
     *
     * @ORM\ManyToOne(targetEntity="CampanasProspectosFeedback")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campana_prospectos_feedback_id", referencedColumnName="id")
     * })
     */
    private $campanaProspectosFeedback;

    /**
     * @var TiposIndustriasParametros
     *
     * @ORM\ManyToOne(targetEntity="TiposIndustriasParametros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_industria_parametro_id", referencedColumnName="id")
     * })
     */
    private $tipoIndustriaParametro;



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
     * Set campanaProspectosFeedback
     *
     * @param Tipddy\MasleadsBundle\Entity\CampanasProspectosFeedback $campanaProspectosFeedback
     */
    public function setCampanaProspectosFeedback(\Tipddy\MasleadsBundle\Entity\CampanasProspectosFeedback $campanaProspectosFeedback)
    {
        $this->campanaProspectosFeedback = $campanaProspectosFeedback;
    }

    /**
     * Get campanaProspectosFeedback
     *
     * @return Tipddy\MasleadsBundle\Entity\CampanasProspectosFeedback 
     */
    public function getCampanaProspectosFeedback()
    {
        return $this->campanaProspectosFeedback;
    }

    /**
     * Set tipoIndustriaParametro
     *
     * @param Tipddy\MasleadsBundle\Entity\TiposIndustriasParametros $tipoIndustriaParametro
     */
    public function setTipoIndustriaParametro(\Tipddy\MasleadsBundle\Entity\TiposIndustriasParametros $tipoIndustriaParametro)
    {
        $this->tipoIndustriaParametro = $tipoIndustriaParametro;
    }

    /**
     * Get tipoIndustriaParametro
     *
     * @return Tipddy\MasleadsBundle\Entity\TiposIndustriasParametros 
     */
    public function getTipoIndustriaParametro()
    {
        return $this->tipoIndustriaParametro;
    }
}