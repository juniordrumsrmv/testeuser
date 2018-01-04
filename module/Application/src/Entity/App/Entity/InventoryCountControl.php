<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventoryCountControl
 *
 * @ORM\Table(name="inventory_count_control")
 * @ORM\Entity
 */
class InventoryCountControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inventory_number", type="integer", nullable=false)
     */
    private $inventoryNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inventory_date", type="date", nullable=false)
     */
    private $inventoryDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_number", type="integer", nullable=false)
     */
    private $blockNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_number", type="integer", nullable=false)
     */
    private $countNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;


}

