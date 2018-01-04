<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NcmCest
 *
 * @ORM\Table(name="ncm_cest")
 * @ORM\Entity
 */
class NcmCest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ncm_key", type="bigint", nullable=false)
     */
    private $ncmKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cest_code", type="string", length=12, nullable=false)
     */
    private $cestCode;


}

