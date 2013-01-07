<?php

namespace Taller2012\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller2012\BaseBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer $idusuario
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string $preguntasecreta
     *
     * @ORM\Column(name="preguntaSecreta", type="string", length=60, nullable=true)
     */
    private $preguntasecreta;

    /**
     * @var string $respuestapregunta
     *
     * @ORM\Column(name="respuestaPregunta", type="string", length=60, nullable=true)
     */
    private $respuestapregunta;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;



    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set preguntasecreta
     *
     * @param string $preguntasecreta
     */
    public function setPreguntasecreta($preguntasecreta)
    {
        $this->preguntasecreta = $preguntasecreta;
    }

    /**
     * Get preguntasecreta
     *
     * @return string 
     */
    public function getPreguntasecreta()
    {
        return $this->preguntasecreta;
    }

    /**
     * Set respuestapregunta
     *
     * @param string $respuestapregunta
     */
    public function setRespuestapregunta($respuestapregunta)
    {
        $this->respuestapregunta = $respuestapregunta;
    }

    /**
     * Get respuestapregunta
     *
     * @return string 
     */
    public function getRespuestapregunta()
    {
        return $this->respuestapregunta;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}