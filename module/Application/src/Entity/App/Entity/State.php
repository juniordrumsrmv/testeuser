<?php

namespace App\Entity;

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


}

