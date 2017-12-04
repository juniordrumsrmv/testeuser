<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $userType;

    /**
     * @var integer
     *
     * @ORM\Column(name="username", type="bigint", precision=0, scale=0, nullable=false, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="user_fullname", type="string", length=60, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userFullname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=60, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_status", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $userStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_level", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $userLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address", type="string", length=60, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_number", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="user_comple", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userComple;

    /**
     * @var string
     *
     * @ORM\Column(name="user_neig", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="user_city", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userCity;

    /**
     * @var string
     *
     * @ORM\Column(name="user_state", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userState;

    /**
     * @var string
     *
     * @ORM\Column(name="user_zip", type="string", length=12, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userZip;

    /**
     * @var string
     *
     * @ORM\Column(name="user_country", type="string", length=60, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone_area_code", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userPhoneAreaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone_number", type="string", length=16, precision=0, scale=0, nullable=true, unique=false)
     */
    private $userPhoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cad_date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $cadDate;


    /**
     * Get userKey
     *
     * @return integer
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

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
     * Set username
     *
     * @param integer $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return integer
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userFullname
     *
     * @param string $userFullname
     *
     * @return User
     */
    public function setUserFullname($userFullname)
    {
        $this->userFullname = $userFullname;

        return $this;
    }

    /**
     * Get userFullname
     *
     * @return string
     */
    public function getUserFullname()
    {
        return $this->userFullname;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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
     * Set userStatus
     *
     * @param integer $userStatus
     *
     * @return User
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

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
     * Set userLevel
     *
     * @param integer $userLevel
     *
     * @return User
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;

        return $this;
    }

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
     * Set userAddress
     *
     * @param string $userAddress
     *
     * @return User
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * Get userAddress
     *
     * @return string
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * Set userNumber
     *
     * @param string $userNumber
     *
     * @return User
     */
    public function setUserNumber($userNumber)
    {
        $this->userNumber = $userNumber;

        return $this;
    }

    /**
     * Get userNumber
     *
     * @return string
     */
    public function getUserNumber()
    {
        return $this->userNumber;
    }

    /**
     * Set userComple
     *
     * @param string $userComple
     *
     * @return User
     */
    public function setUserComple($userComple)
    {
        $this->userComple = $userComple;

        return $this;
    }

    /**
     * Get userComple
     *
     * @return string
     */
    public function getUserComple()
    {
        return $this->userComple;
    }

    /**
     * Set userNeig
     *
     * @param string $userNeig
     *
     * @return User
     */
    public function setUserNeig($userNeig)
    {
        $this->userNeig = $userNeig;

        return $this;
    }

    /**
     * Get userNeig
     *
     * @return string
     */
    public function getUserNeig()
    {
        return $this->userNeig;
    }

    /**
     * Set userCity
     *
     * @param string $userCity
     *
     * @return User
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Get userCity
     *
     * @return string
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * Set userState
     *
     * @param string $userState
     *
     * @return User
     */
    public function setUserState($userState)
    {
        $this->userState = $userState;

        return $this;
    }

    /**
     * Get userState
     *
     * @return string
     */
    public function getUserState()
    {
        return $this->userState;
    }

    /**
     * Set userZip
     *
     * @param string $userZip
     *
     * @return User
     */
    public function setUserZip($userZip)
    {
        $this->userZip = $userZip;

        return $this;
    }

    /**
     * Get userZip
     *
     * @return string
     */
    public function getUserZip()
    {
        return $this->userZip;
    }

    /**
     * Set userCountry
     *
     * @param string $userCountry
     *
     * @return User
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;

        return $this;
    }

    /**
     * Get userCountry
     *
     * @return string
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * Set userPhoneAreaCode
     *
     * @param string $userPhoneAreaCode
     *
     * @return User
     */
    public function setUserPhoneAreaCode($userPhoneAreaCode)
    {
        $this->userPhoneAreaCode = $userPhoneAreaCode;

        return $this;
    }

    /**
     * Get userPhoneAreaCode
     *
     * @return string
     */
    public function getUserPhoneAreaCode()
    {
        return $this->userPhoneAreaCode;
    }

    /**
     * Set userPhoneNumber
     *
     * @param string $userPhoneNumber
     *
     * @return User
     */
    public function setUserPhoneNumber($userPhoneNumber)
    {
        $this->userPhoneNumber = $userPhoneNumber;

        return $this;
    }

    /**
     * Get userPhoneNumber
     *
     * @return string
     */
    public function getUserPhoneNumber()
    {
        return $this->userPhoneNumber;
    }

    /**
     * Set cadDate
     *
     * @param \DateTime $cadDate
     *
     * @return User
     */
    public function setCadDate($cadDate)
    {
        $this->cadDate = $cadDate;

        return $this;
    }

    /**
     * Get cadDate
     *
     * @return \DateTime
     */
    public function getCadDate()
    {
        return $this->cadDate;
    }
}

