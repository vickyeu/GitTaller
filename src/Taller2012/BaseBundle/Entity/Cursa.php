<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Cursa
 *
 * @ORM\Table(name="cursa")
 * @ORM\Entity
 */
class Cursa
{
     /**
     * @ORM\ManyToOne(targetEntity="Instancia", inversedBy="cursa")
     * @ORM\JoinColumn(name="idinstancia", referencedColumnName="id")
     */
     /**
     * @ORM\OneToMany(targetEntity="Plancurso", mappedBy="cursa")
     */ 
     /**
     * @ORM\OneToMany(targetEntity="Instancia", mappedBy="cursa")
     */ 
     /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="cursa")
     * @ORM\JoinColumn(name="idpersona", referencedColumnName="id")
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
     * @var integer $notafinal
     *
     * @ORM\Column(name="notaFinal", type="integer", nullable=true)
     */
    private $notafinal;

    /**
     * @var string $regularidad
     *
     * @ORM\Column(name="regularidad", type="string", length=45, nullable=true)
     */
    private $regularidad;

    /**
     * @var Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersona", referencedColumnName="id")
     * })
     */
    private $idpersona;

    /**
     * @var Instancia
     *
     * @ORM\ManyToOne(targetEntity="Instancia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idInstancia", referencedColumnName="id")
     * })
     */
    private $idinstancia;



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
     * Set notafinal
     *
     * @param integer $notafinal
     */
    public function setNotafinal($notafinal)
    {
        $this->notafinal = $notafinal;
    }

    /**
     * Get notafinal
     *
     * @return integer 
     */
    public function getNotafinal()
    {
        return $this->notafinal;
    }

    /**
     * Set regularidad
     *
     * @param string $regularidad
     */
    public function setRegularidad($regularidad)
    {
        $this->regularidad = $regularidad;
    }

    /**
     * Get regularidad
     *
     * @return string 
     */
    public function getRegularidad()
    {
        return $this->regularidad;
    }

    /**
     * Set idpersona
     *
     * @param Taller2012\BaseBundle\Entity\Persona $idpersona
     */
    public function setIdpersona(\Taller2012\BaseBundle\Entity\Persona $idpersona)
    {
        $this->idpersona = $idpersona;
    }

    /**
     * Get idpersona
     *
     * @return Taller2012\BaseBundle\Entity\Persona 
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    /**
     * Set idinstancia
     *
     * @param Taller2012\BaseBundle\Entity\Instancia $idinstancia
     */
    public function setIdinstancia(\Taller2012\BaseBundle\Entity\Instancia $idinstancia)
    {
        $this->idinstancia = $idinstancia;
    }

    /**
     * Get idinstancia
     *
     * @return Taller2012\BaseBundle\Entity\Instancia 
     */
    public function getIdinstancia()
    {
        return $this->idinstancia;
    }
}