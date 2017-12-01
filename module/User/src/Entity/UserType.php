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
     * @ORM\Id
     * @ORM\Column(name="user_type", type="smallint", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\ManyToOne(targetEntity="User\Entity\User", inversedBy="user_type")
     * @ORM\JoinColumn(name="user_type", referencedColumnName="user_type")
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="name_type", type="string", length=30, nullable=true)
     */
    private $nameType;

    /**
     * @return int
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param int $userType
     * @return UserType
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameType()
    {
        return $this->nameType;
    }

    /**
     * @param string $nameType
     * @return UserType
     */
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;
        return $this;
    }




}
