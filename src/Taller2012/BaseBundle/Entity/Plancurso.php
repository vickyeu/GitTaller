<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Plancurso
 *
 * @ORM\Table(name="plancurso")
 * @ORM\Entity
 */
class Plancurso
{
     /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="plancurso")
     * @ORM\JoinColumn(name="idcurso", referencedColumnName="id")
     */
     /**
     * @ORM\ManyToOne(targetEntity="Plan", inversedBy="plancurso")
     * @ORM\JoinColumn(name="idplan", referencedColumnName="id")
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
     * @var integer $puntos
     *
     * @ORM\Column(name="puntos", type="integer", nullable=true)
     */
    private $puntos;

    /**
     * @var boolean $obligatorio
     *
     * @ORM\Column(name="obligatorio", type="boolean", nullable=true)
     */
    private $obligatorio;

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
     * @var Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCurso", referencedColumnName="id")
     * })
     */
    private $idcurso;



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
     * Set puntos
     *
     * @param integer $puntos
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;
    }

    /**
     * Get puntos
     *
     * @return integer 
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     * Set obligatorio
     *
     * @param boolean $obligatorio
     */
    public function setObligatorio($obligatorio)
    {
        $this->obligatorio = $obligatorio;
    }

    /**
     * Get obligatorio
     *
     * @return boolean 
     */
    public function getObligatorio()
    {
        return $this->obligatorio;
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

    /**
     * Set idcurso
     *
     * @param Taller2012\BaseBundle\Entity\Curso $idcurso
     */
    public function setIdcurso(\Taller2012\BaseBundle\Entity\Curso $idcurso)
    {
        $this->idcurso = $idcurso;
    }

    /**
     * Get idcurso
     *
     * @return Taller2012\BaseBundle\Entity\Curso 
     */
    public function getIdcurso()
    {
        return $this->idcurso;
    }
}