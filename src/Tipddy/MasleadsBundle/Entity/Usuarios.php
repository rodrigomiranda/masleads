<?php

namespace Tipddy\MasleadsBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tipddy\MasleadsBundle\Entity\Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="Tipddy\MasleadsBundle\Entity\UsuariosRepository")
 */
class Usuarios implements UserInterface
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
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $apellido;

    /**
     * @var string $usuarioUrl
     *
     * @ORM\Column(name="usuario_url", type="string", length=100, nullable=true)
     */
    private $usuarioUrl;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=true)
     */
    private $login;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string $rut
     *
     * @ORM\Column(name="rut", type="string", length=12, nullable=true)
     */
    private $rut;

    /**
     * @var string $cargo
     *
     * @ORM\Column(name="cargo", type="string", length=255, nullable=true)
     */
    private $cargo;

    /**
     * @var string $profesion
     *
     * @ORM\Column(name="profesion", type="string", length=255, nullable=true)
     */
    private $profesion;

    /**
     * @var text $especialidades
     *
     * @ORM\Column(name="especialidades", type="text", nullable=true)
     */
    private $especialidades;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $email2
     *
     * @ORM\Column(name="email2", type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @var string $codigoPostal
     *
     * @ORM\Column(name="codigo_postal", type="string", length=50, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var string $telefono2
     *
     * @ORM\Column(name="telefono2", type="string", length=30, nullable=true)
     */
    private $telefono2;

    /**
     * @var string $celular
     *
     * @ORM\Column(name="celular", type="string", length=30, nullable=true)
     */
    private $celular;

    /**
     * @var string $empresa
     *
     * @ORM\Column(name="empresa", type="string", length=255, nullable=false)
     */
    private $empresa;

    /**
     * @var string $paginaWeb
     *
     * @ORM\Column(name="pagina_web", type="string", length=255, nullable=true)
     */
    private $paginaWeb;

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
     * @var Provincias
     *
     * @ORM\ManyToOne(targetEntity="Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var Regiones
     *
     * @ORM\ManyToOne(targetEntity="Regiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region", referencedColumnName="id")
     * })
     */
    private $region;

    /**
     * @var Organizaciones
     *
     * @ORM\ManyToOne(targetEntity="Organizaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organizacion_id", referencedColumnName="id")
     * })
     */
    private $organizacion;



    /*
     * Implementation of UserInterface
     */
     public function getRoles()
     {
        return array($this->tipoUsuario);
     }
    
     public function getSalt()
     {
        return false;
     }
    
     public function getUsername()
     {
        return $this->getLogin();
     }
    
     public function eraseCredentials()
     {
    
     }
    
     public function equals(UserInterface $user)
     {
        return $user->getUsername() == $this->getUsername();
     }
        
        
     public function serialize()
     {
        return serialize(array(
                           $this->getNick()
                        ));
     }
    
     public function unserialize($serialized)
     {
        $arr = unserialize($serialized);
        $this->setNick($arr[0]);
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
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
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
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set cargo
     *
     * @param string $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
    }

    /**
     * Get profesion
     *
     * @return string 
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set especialidades
     *
     * @param text $especialidades
     */
    public function setEspecialidades($especialidades)
    {
        $this->especialidades = $especialidades;
    }

    /**
     * Get especialidades
     *
     * @return text 
     */
    public function getEspecialidades()
    {
        return $this->especialidades;
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
     * Set email2
     *
     * @param string $email2
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;
    }

    /**
     * Get email2
     *
     * @return string 
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
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
     * Set telefono2
     *
     * @param string $telefono2
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set celular
     *
     * @param string $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set paginaWeb
     *
     * @param string $paginaWeb
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->paginaWeb = $paginaWeb;
    }

    /**
     * Get paginaWeb
     *
     * @return string 
     */
    public function getPaginaWeb()
    {
        return $this->paginaWeb;
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
     * Set provincia
     *
     * @param Tipddy\MasleadsBundle\Entity\Provincias $provincia
     */
    public function setProvincia(\Tipddy\MasleadsBundle\Entity\Provincias $provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return Tipddy\MasleadsBundle\Entity\Provincias 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set region
     *
     * @param Tipddy\MasleadsBundle\Entity\Regiones $region
     */
    public function setRegion(\Tipddy\MasleadsBundle\Entity\Regiones $region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return Tipddy\MasleadsBundle\Entity\Regiones 
     */
    public function getRegion()
    {
        return $this->region;
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