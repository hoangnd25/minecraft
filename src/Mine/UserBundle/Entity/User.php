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
     * @ORM\Column(type="integer",length=20,name="lastlogin",nullable=true))
     */
    protected $lastGameLogin;

    /**
     * @ORM\Column(length=45,nullable=true))
     */
    protected $ip;

    public function __construct()
    {
        parent::__construct();
    }
}