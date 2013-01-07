<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Carrera
 *
 * @ORM\Table(name="carrera")
 * @ORM\Entity
 */
class Carrera
{
         /**
     * @ORM\OneToMany(targetEntity="Plan", mappedBy="carrera")
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string $categoria
     *
     * @ORM\Column(name="categoria", type="string", length=45, nullable=true)
     */
    private $categoria;

    /**
     * @var string $coneau
     *
     * @ORM\Column(name="coneau", type="string", length=45, nullable=true)
     */
    private $coneau;

    /**
     * @var boolean $emitetitulo
     *
     * @ORM\Column(name="emiteTitulo", type="boolean", nullable=true)
     */
    private $emitetitulo;

    /**
     * @var string $observaciones
     *
     * @ORM\Column(name="observaciones", type="string", length=45, nullable=true)
     */
    private $observaciones;



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
     * Set categoria
     *
     * @param string $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set coneau
     *
     * @param string $coneau
     */
    public function setConeau($coneau)
    {
        $this->coneau = $coneau;
    }

    /**
     * Get coneau
     *
     * @return string 
     */
    public function getConeau()
    {
        return $this->coneau;
    }

    /**
     * Set emitetitulo
     *
     * @param boolean $emitetitulo
     */
    public function setEmitetitulo($emitetitulo)
    {
        $this->emitetitulo = $emitetitulo;
    }

    /**
     * Get emitetitulo
     *
     * @return boolean 
     */
    public function getEmitetitulo()
    {
        return $this->emitetitulo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}