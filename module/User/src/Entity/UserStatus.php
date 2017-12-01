<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStatus
 *
 * @ORM\Table(name="user_status")
 * @ORM\Entity
 */
class UserStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_status", type="smallint", nullable=false)
     * @ORM\Id
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="name_status", type="string", length=30, nullable=true)
     */
    private $nameStatus;



    /**
     * Get userStatus
     *
     * @return integer
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set nameStatus
     *
     * @param string $nameStatus
     *
     * @return UserStatus
     */
    public function setNameStatus($nameStatus)
    {
        $this->nameStatus = $nameStatus;

        return $this;
    }

    /**
     * Get nameStatus
     *
     * @return string
     */
    public function getNameStatus()
    {
        return $this->nameStatus;
    }
}
