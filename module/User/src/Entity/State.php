<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="state")
 * @ORM\Entity
 */
class State
{
    /**
     * @var string
     *
     * @ORM\Column(name="acronym", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acronym;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="timezone", type="boolean", nullable=true)
     */
    private $timezone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dls_timezone", type="boolean", nullable=true)
     */
    private $dlsTimezone;

    /**
     * @var string
     *
     * @ORM\Column(name="state_code", type="string", length=10, nullable=true)
     */
    private $stateCode;



    /**
     * Get acronym
     *
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return State
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set timezone
     *
     * @param boolean $timezone
     *
     * @return State
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return boolean
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set dlsTimezone
     *
     * @param boolean $dlsTimezone
     *
     * @return State
     */
    public function setDlsTimezone($dlsTimezone)
    {
        $this->dlsTimezone = $dlsTimezone;

        return $this;
    }

    /**
     * Get dlsTimezone
     *
     * @return boolean
     */
    public function getDlsTimezone()
    {
        return $this->dlsTimezone;
    }

    /**
     * Set stateCode
     *
     * @param string $stateCode
     *
     * @return State
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * Get stateCode
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }
}
