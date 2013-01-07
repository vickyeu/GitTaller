<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity
 */
class Plan
{
    
     /**
     * @ORM\OneToMany(targetEntity="Plancurso", mappedBy="plan")
     */ 
     /**
     * @ORM\ManyToOne(targetEntity="Carrera", inversedBy="plan")
     * @ORM\JoinColumn(name="idcarrera", referencedColumnName="id")
     */
     /**
     * @ORM\OneToMany(targetEntity="Cohorte", mappedBy="plan")
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
     * @var integer $nresol
     *
     * @ORM\Column(name="nResol", type="integer", nullable=true)
     */
    private $nresol;

    /**
     * @var integer $anoresol
     *
     * @ORM\Column(name="anoResol", type="integer", nullable=true)
     */
    private $anoresol;

    /**
     * @var integer $cantoptativ
     *
     * @ORM\Column(name="cantOptativ", type="integer", nullable=true)
     */
    private $cantoptativ;

    /**
     * @var Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCarrera", referencedColumnName="id")
     * })
     */
    private $idcarrera;



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
     * Set nresol
     *
     * @param integer $nresol
     */
    public function setNresol($nresol)
    {
        $this->nresol = $nresol;
    }

    /**
     * Get nresol
     *
     * @return integer 
     */
    public function getNresol()
    {
        return $this->nresol;
    }

    /**
     * Set anoresol
     *
     * @param integer $anoresol
     */
    public function setAnoresol($anoresol)
    {
        $this->anoresol = $anoresol;
    }

    /**
     * Get anoresol
     *
     * @return integer 
     */
    public function getAnoresol()
    {
        return $this->anoresol;
    }

    /**
     * Set cantoptativ
     *
     * @param integer $cantoptativ
     */
    public function setCantoptativ($cantoptativ)
    {
        $this->cantoptativ = $cantoptativ;
    }

    /**
     * Get cantoptativ
     *
     * @return integer 
     */
    public function getCantoptativ()
    {
        return $this->cantoptativ;
    }

    /**
     * Set idcarrera
     *
     * @param Taller2012\BaseBundle\Entity\Carrera $idcarrera
     */
    public function setIdcarrera(\Taller2012\BaseBundle\Entity\Carrera $idcarrera)
    {
        $this->idcarrera = $idcarrera;
    }

    /**
     * Get idcarrera
     *
     * @return Taller2012\BaseBundle\Entity\Carrera 
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }
}