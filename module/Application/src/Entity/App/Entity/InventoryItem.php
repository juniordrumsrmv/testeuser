<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventoryItem
 *
 * @ORM\Table(name="inventory_item")
 * @ORM\Entity
 */
class InventoryItem
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
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_plu", type="string", length=22, nullable=false)
     */
    private $descPlu;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=true)
     */
    private $skuId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scanned", type="boolean", nullable=true)
     */
    private $scanned;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock", type="bigint", nullable=true)
     */
    private $cpuClock;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=true)
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $taxPercent;


}

