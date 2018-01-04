<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 *
 * @ORM\Table(name="unit", uniqueConstraints={@ORM\UniqueConstraint(name="index_unit_short_name", columns={"short_name"})})
 * @ORM\Entity
 */
class Unit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_key", type="integer", nullable=false)
     */
    private $unitKey;

    /**
     * @var string
     *
     * @ORM\Column(name="short_name", type="string", length=4, nullable=true)
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(name="long_name", type="string", length=50, nullable=true)
     */
    private $longName;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_decimals", type="smallint", nullable=true)
     */
    private $maxDecimals;


}

