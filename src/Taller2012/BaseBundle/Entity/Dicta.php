<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Dicta
 *
 * @ORM\Table(name="dicta")
 * @ORM\Entity
 */
class Dicta
{
    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="dicta")
     * @ORM\JoinColumn(name="idpersona", referencedColumnName="id")
     */
     /**
     * @ORM\ManyToOne(targetEntity="Instancia", inversedBy="dicta")
     * @ORM\JoinColumn(name="idinstancia", referencedColumnName="id")
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