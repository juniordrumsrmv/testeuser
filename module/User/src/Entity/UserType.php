<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserType
 *
 * @ORM\Table(name="user_type")
 * @ORM\Entity
 */
class UserType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="name_type", type="string", length=30, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nameType;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="User\Entity\User", mappedBy="userType")
     */
    private $user;

    /**
     * Get userType
     *
     * @return integer
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set nameType
     *
     * @param string $nameType
     *
     * @return UserType
     */
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;

        return $this;
    }

    /**
     * Get nameType
     *
     * @return string
     */
    public function getNameType()
    {
        return $this->nameType;
    }

    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}

