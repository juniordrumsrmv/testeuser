<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LmcSequence
 *
 * @ORM\Table(name="lmc_sequence")
 * @ORM\Entity
 */
class LmcSequence
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="bigint", nullable=true)
     */
    private $sequence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lmc_type", type="boolean", nullable=true)
     */
    private $lmcType;

    /**
     * @var string
     *
     * @ORM\Column(name="lmc_obs", type="text", length=65535, nullable=true)
     */
    private $lmcObs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

