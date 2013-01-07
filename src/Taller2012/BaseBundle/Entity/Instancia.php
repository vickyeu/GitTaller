<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Instancia
 *
 * @ORM\Table(name="instancia")
 * @ORM\Entity
 */
class Instancia
{
     /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="instancia")
     * @ORM\JoinColumn(name="idcurso", referencedColumnName="id")
     */
     /**
     * @ORM\OneToMany(targetEntity="Cursa", mappedBy="instancia")
     */ 
    /**
     * @ORM\OneToMany(targetEntity="Dicta", mappedBy="instancia")
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
     * @var date $fechainicio
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=true)
     */
    private $fechainicio;

    /**
     * @var integer $cantclases
     *
     * @ORM\Column(name="cantClases", type="integer", nullable=true)
     */
    private $cantclases;

    /**
     * @var integer $porcentajeasis
     *
     * @ORM\Column(name="porcentajeAsis", type="integer", nullable=true)
     */
    private $porcentajeasis;

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
     * Set fechainicio
     *
     * @param date $fechainicio
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    }

    /**
     * Get fechainicio
     *
     * @return date 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set cantclases
     *
     * @param integer $cantclases
     */
    public function setCantclases($cantclases)
    {
        $this->cantclases = $cantclases;
    }

    /**
     * Get cantclases
     *
     * @return integer 
     */
    public function getCantclases()
    {
        return $this->cantclases;
    }

    /**
     * Set porcentajeasis
     *
     * @param integer $porcentajeasis
     */
    public function setPorcentajeasis($porcentajeasis)
    {
        $this->porcentajeasis = $porcentajeasis;
    }

    /**
     * Get porcentajeasis
     *
     * @return integer 
     */
    public function getPorcentajeasis()
    {
        return $this->porcentajeasis;
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