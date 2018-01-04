<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalStatistics
 *
 * @ORM\Table(name="global_statistics")
 * @ORM\Entity
 */
class GlobalStatistics
{
    /**
     * @var string
     *
     * @ORM\Column(name="s_module", type="string", length=1, nullable=false)
     */
    private $sModule;

    /**
     * @var string
     *
     * @ORM\Column(name="s_name", type="string", length=9, nullable=false)
     */
    private $sName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_time", type="datetime", nullable=false)
     */
    private $sTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="s_value", type="bigint", nullable=true)
     */
    private $sValue;


}

