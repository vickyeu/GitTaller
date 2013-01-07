<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity
 */
class Localidad
{
    /**
     * @ORM\OneToMany(targetEntity="Persona", mappedBy="localidad")
     */
/**
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="localidad")
     * @ORM\JoinColumn(name="idprovincia", referencedColumnName="id")
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
     * @var integer $cp
     *
     * @ORM\Column(name="CP", type="integer", nullable=true)
     */
    private $cp;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var integer $idprovincia
     *
     * @ORM\Column(name="idProvincia", type="integer", nullable=true)
     */
    private $idprovincia;



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
     * Set cp
     *
     * @param integer $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
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
     * Set idprovincia
     *
     * @param integer $idprovincia
     */
    public function setIdprovincia($idprovincia)
    {
        $this->idprovincia = $idprovincia;
    }

    /**
     * Get idprovincia
     *
     * @return integer 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }
}