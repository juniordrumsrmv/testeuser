<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComparisonType
 *
 * @ORM\Table(name="comparison_type")
 * @ORM\Entity
 */
class ComparisonType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;


}

