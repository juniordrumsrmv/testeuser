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
     * @ORM\Column(name="user_level", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="name_level", type="string", length=30, nullable=true)
     */
    private $nameLevel;

    /**
     * @return int
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * @param int $userLevel
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;
    }

    /**
     * @return string
     */
    public function getNameLevel()
    {
        return $this->nameLevel;
    }

    /**
     * @param string $nameLevel
     */
    public function setNameLevel($nameLevel)
    {
        $this->nameLevel = $nameLevel;
    }

}
