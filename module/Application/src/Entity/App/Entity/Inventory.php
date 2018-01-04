<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="inventory")
 * @ORM\Entity
 */
class Inventory
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="count_date", type="datetime", nullable=true)
     */
    private $countDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="count_status", type="boolean", nullable=true)
     */
    private $countStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="update_status", type="boolean", nullable=true)
     */
    private $updateStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="smallint", nullable=false)
     */
    private $count;


}

