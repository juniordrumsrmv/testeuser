<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLevel
 *
 * @ORM\Table(name="user_level")
 * @ORM\Entity
 */
class UserLevel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_level", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="name_level", type="string", length=30, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nameLevel;


    /**
     * Get userLevel
     *
     * @return integer
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * Set nameLevel
     *
     * @param string $nameLevel
     *
     * @return UserLevel
     */
    public function setNameLevel($nameLevel)
    {
        $this->nameLevel = $nameLevel;

        return $this;
    }

    /**
     * Get nameLevel
     *
     * @return string
     */
    public function getNameLevel()
    {
        return $this->nameLevel;
    }
}

