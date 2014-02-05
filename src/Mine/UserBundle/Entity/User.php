<?php

namespace Mine\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="float",nullable=true))
     */
    protected $x;

    /**
     * @ORM\Column(type="float",nullable=true))
     */
    protected $y;

    /**
     * @ORM\Column(type="float",nullable=true)
     */
    protected $z;

    /**
     * @ORM\Column(length=100)
     */
    protected $world;

    /**
     * @ORM\Column(type="integer",length=20,name="lastlogin",nullable=true))
     */
    protected $lastGameLogin;

    /**
     * @ORM\Column(length=45,nullable=true))
     */
    protected $ip;

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $lastGameLogin
     */
    public function setLastGameLogin($lastGameLogin)
    {
        $this->lastGameLogin = $lastGameLogin;
    }

    /**
     * @return mixed
     */
    public function getLastGameLogin()
    {
        return $this->lastGameLogin;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }



    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->z = 0;
        $this->world = 'world';

        parent::__construct();
    }
}