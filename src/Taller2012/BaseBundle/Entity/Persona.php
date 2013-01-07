<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{
     /**
     * @ORM\OneToMany(targetEntity="Cursa", mappedBy="persona")
     */ 
     /**
     * @ORM\OneToMany(targetEntity="Alumnocohorte", mappedBy="persona")
     */ 
      /**
     * @ORM\OneToMany(targetEntity="Dicta", mappedBy="persona")
     */ 
    
    /**
     * @ORM\ManyToOne(targetEntity="Localidad", inversedBy="persona")
     * @ORM\JoinColumn(name="idlocalidad", referencedColumnName="id")
     */

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=true)
     */
    private $apellido;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string $dni
     *
     * @ORM\Column(name="dni", type="string", length=45, nullable=true)
     */
    private $dni;

    /**
     * @var string $nacimiento
     *
     * @ORM\Column(name="nacimiento", type="string", length=45, nullable=true)
     */
    private $nacimiento;

    /**
     * @var string $domicilio
     *
     * @ORM\Column(name="domicilio", type="string", length=45, nullable=true)
     */
    private $domicilio;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string $cuil
     *
     * @ORM\Column(name="cuil", type="string", length=45, nullable=true)
     */
    private $cuil;

    /**
     * @var string $nacionalidad
     *
     * @ORM\Column(name="nacionalidad", type="string", length=45, nullable=true)
     */
    private $nacionalidad;

    /**
     * @var string $nroalumno
     *
     * @ORM\Column(name="nroAlumno", type="string", length=45, nullable=true)
     */
    private $nroalumno;

    /**
     * @var string $nroprofesor
     *
     * @ORM\Column(name="nroProfesor", type="string", length=45, nullable=true)
     */
    private $nroprofesor;

    /**
     * @var Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocalidad", referencedColumnName="id")
     * })
     */
    private $idlocalidad;



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
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nacimiento
     *
     * @param string $nacimiento
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }

    /**
     * Get nacimiento
     *
     * @return string 
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
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
     * Set cuil
     *
     * @param string $cuil
     */
    public function setCuil($cuil)
    {
        $this->cuil = $cuil;
    }

    /**
     * Get cuil
     *
     * @return string 
     */
    public function getCuil()
    {
        return $this->cuil;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set nroalumno
     *
     * @param string $nroalumno
     */
    public function setNroalumno($nroalumno)
    {
        $this->nroalumno = $nroalumno;
    }

    /**
     * Get nroalumno
     *
     * @return string 
     */
    public function getNroalumno()
    {
        return $this->nroalumno;
    }

    /**
     * Set nroprofesor
     *
     * @param string $nroprofesor
     */
    public function setNroprofesor($nroprofesor)
    {
        $this->nroprofesor = $nroprofesor;
    }

    /**
     * Get nroprofesor
     *
     * @return string 
     */
    public function getNroprofesor()
    {
        return $this->nroprofesor;
    }

    /**
     * Set idlocalidad
     *
     * @param Taller2012\BaseBundle\Entity\Localidad $idlocalidad
     */
    public function setIdlocalidad(\Taller2012\BaseBundle\Entity\Localidad $idlocalidad)
    {
        $this->idlocalidad = $idlocalidad;
    }

    /**
     * Get idlocalidad
     *
     * @return Taller2012\BaseBundle\Entity\Localidad 
     */
    public function getIdlocalidad()
    {
        return $this->idlocalidad;
    }
}