<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosPartition
 *
 * @ORM\Table(name="pos_partition")
 * @ORM\Entity
 */
class PosPartition
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="mount_point", type="string", length=255, nullable=false)
     */
    private $mountPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string", length=255, nullable=true)
     */
    private $device;

    /**
     * @var integer
     *
     * @ORM\Column(name="blocks", type="bigint", nullable=true)
     */
    private $blocks;

    /**
     * @var integer
     *
     * @ORM\Column(name="blocks_used", type="bigint", nullable=true)
     */
    private $blocksUsed;

    /**
     * @var integer
     *
     * @ORM\Column(name="blocks_available", type="bigint", nullable=true)
     */
    private $blocksAvailable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="blocks_use_percent", type="boolean", nullable=true)
     */
    private $blocksUsePercent;


}

