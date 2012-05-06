<?php

namespace Tipddy\MasleadsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\MasleadsBundle\Entity\PaginasMenus
 *
 * @ORM\Table(name="paginas_menus")
 * @ORM\Entity
 */
class PaginasMenus
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
     * @var string $titulo
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var string $direccionWeb
     *
     * @ORM\Column(name="direccion_web", type="string", length=255, nullable=false)
     */
    private $direccionWeb;

    /**
     * @var bigint $paginaId
     *
     * @ORM\Column(name="pagina_id", type="bigint", nullable=false)
     */
    private $paginaId;



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
     * Set titulo
     *
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set direccionWeb
     *
     * @param string $direccionWeb
     */
    public function setDireccionWeb($direccionWeb)
    {
        $this->direccionWeb = $direccionWeb;
    }

    /**
     * Get direccionWeb
     *
     * @return string 
     */
    public function getDireccionWeb()
    {
        return $this->direccionWeb;
    }

    /**
     * Set paginaId
     *
     * @param bigint $paginaId
     */
    public function setPaginaId($paginaId)
    {
        $this->paginaId = $paginaId;
    }

    /**
     * Get paginaId
     *
     * @return bigint 
     */
    public function getPaginaId()
    {
        return $this->paginaId;
    }
}