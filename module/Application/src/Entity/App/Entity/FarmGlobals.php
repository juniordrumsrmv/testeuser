<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmGlobals
 *
 * @ORM\Table(name="farm_globals")
 * @ORM\Entity
 */
class FarmGlobals
{
    /**
     * @var integer
     *
     * @ORM\Column(name="farm_delay", type="bigint", nullable=false)
     */
    private $farmDelay;


}

