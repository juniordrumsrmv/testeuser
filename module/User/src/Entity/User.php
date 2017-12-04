<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1483A5E9F85E0677", columns={"username"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userKey;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="User\Entity\UserType", inversedBy="users")
     * @ORM\JoinColumn(name="user_type", referencedColumnName="user_type")
     */
    private $userType;

    /**
     * @var integer
     *
     * @ORM\Column(name="username", type="bigint", nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="user_fullname", type="string", length=60, nullable=true)
     */
    private $userFullname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=60, nullable=true)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_status", type="smallint", nullable=false)
     */
    private $userStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_level", type="smallint", nullable=false)
     */
    private $userLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address", type="string", length=60, nullable=true)
     */
    private $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_number", type="string", length=20, nullable=true)
     */
    private $userNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="user_comple", type="string", length=20, nullable=true)
     */
    private $userComple;

    /**
     * @var string
     *
     * @ORM\Column(name="user_neig", type="string", length=20, nullable=true)
     */
    private $userNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="user_city", type="string", length=20, nullable=true)
     */
    private $userCity;

    /**
     * @var string
     *
     * @ORM\Column(name="user_state", type="string", length=20, nullable=true)
     */
    private $userState;

    /**
     * @var string
     *
     * @ORM\Column(name="user_zip", type="string", length=12, nullable=true)
     */
    private $userZip;

    /**
     * @var string
     *
     * @ORM\Column(name="user_country", type="string", length=60, nullable=true)
     */
    private $userCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone_area_code", type="string", length=16, nullable=true)
     */
    private $userPhoneAreaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone_number", type="string", length=16, nullable=true)
     */
    private $userPhoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cad_date", type="datetime", nullable=true)
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
