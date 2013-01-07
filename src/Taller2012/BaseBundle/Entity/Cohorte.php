<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Cohorte
 *
 * @ORM\Table(name="cohorte")
 * @ORM\Entity
 */
class Cohorte
{
    /**
     * @ORM\ManyToOne(targetEntity="Plan", inversedBy="cohorte")
     * @ORM\JoinColumn(name="idplan", referencedColumnName="id")
     */
      /**
     * @ORM\OneToMany(targetEntity="Alumnocohorte", mappedBy="cohorte")
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
     * @var integer $ano
     *
     * @ORM\Column(name="ano", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var string $edicion
     *
     * @ORM\Column(name="edicion", type="string", length=45, nullable=true)
     */
    private $edicion;

    /**
     * @var Plan
     *
     * @ORM\ManyToOne(targetEntity="Plan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPlan", referencedColumnName="id")
     * })
     */
    private $idplan;



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
     * Set ano
     *
     * @param integer $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set edicion
     *
     * @param string $edicion
     */
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;
    }

    /**
     * Get edicion
     *
     * @return string 
     */
    public function getEdicion()
    {
        return $this->edicion;
    }

    /**
     * Set idplan
     *
     * @param Taller2012\BaseBundle\Entity\Plan $idplan
     */
    public function setIdplan(\Taller2012\BaseBundle\Entity\Plan $idplan)
    {
        $this->idplan = $idplan;
    }

    /**
     * Get idplan
     *
     * @return Taller2012\BaseBundle\Entity\Plan 
     */
    public function getIdplan()
    {
        return $this->idplan;
    }
}