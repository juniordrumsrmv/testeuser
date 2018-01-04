<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcquirrType
 *
 * @ORM\Table(name="acquirr_type")
 * @ORM\Entity
 */
class AcquirrType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="acquirr_key", type="smallint", nullable=false)
     */
    private $acquirrKey;

    /**
     * @var string
     *
     * @ORM\Column(name="acquirr_name", type="string", length=30, nullable=true)
     */
    private $acquirrName;


}

