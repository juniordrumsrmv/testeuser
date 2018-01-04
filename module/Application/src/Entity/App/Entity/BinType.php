<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BinType
 *
 * @ORM\Table(name="bin_type")
 * @ORM\Entity
 */
class BinType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bin_key", type="smallint", nullable=false)
     */
    private $binKey;

    /**
     * @var string
     *
     * @ORM\Column(name="bin_name", type="string", length=30, nullable=true)
     */
    private $binName;

    /**
     * @var integer
     *
     * @ORM\Column(name="acquirr_key", type="smallint", nullable=false)
     */
    private $acquirrKey;


}

