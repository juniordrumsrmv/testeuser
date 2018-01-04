<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tank
 *
 * @ORM\Table(name="tank")
 * @ORM\Entity
 */
class Tank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tank_number", type="smallint", nullable=false)
     */
    private $tankNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="tank_name", type="string", length=30, nullable=true)
     */
    private $tankName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tank_date_inc", type="datetime", nullable=true)
     */
    private $tankDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tank_date_alt", type="datetime", nullable=true)
     */
    private $tankDateAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $capacity;


}

