<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Alumnocohorte
 *
 * @ORM\Table(name="alumnocohorte")
 * @ORM\Entity
 */
class Alumnocohorte
{
    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="alumnocohorte")
     * @ORM\JoinColumn(name="idpersona", referencedColumnName="id")
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="Cohorte", inversedBy="alumnocohorte")
     * @ORM\JoinColumn(name="idcohorte", referencedColumnName="id")
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
     * @var string $estado
     *
     * @ORM\Column(name="estado", type="string", length=45, nullable=true)
     */
    private $estado;

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
     * @var Cohorte
     *
     * @ORM\ManyToOne(targetEntity="Cohorte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCohorte", referencedColumnName="id")
     * })
     */
    private $idcohorte;



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
     * Set estado
     *
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
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
     * Set idcohorte
     *
     * @param Taller2012\BaseBundle\Entity\Cohorte $idcohorte
     */
    public function setIdcohorte(\Taller2012\BaseBundle\Entity\Cohorte $idcohorte)
    {
        $this->idcohorte = $idcohorte;
    }

    /**
     * Get idcohorte
     *
     * @return Taller2012\BaseBundle\Entity\Cohorte 
     */
    public function getIdcohorte()
    {
        return $this->idcohorte;
    }
}