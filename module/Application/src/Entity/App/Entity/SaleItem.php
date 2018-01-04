<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItem
 *
 * @ORM\Table(name="sale_item", indexes={@ORM\Index(name="index_sale_item", columns={"store_key", "pos_number", "start_time", "plu_id"})})
 * @ORM\Entity
 */
class SaleItem
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
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

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
     * @ORM\Column(name="desc_plu", type="string", length=48, nullable=false)
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
     * @ORM\Column(name="clerk_key", type="bigint", nullable=true)
     */
    private $clerkKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="increase", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $increase;

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
     * @var boolean
     *
     * @ORM\Column(name="query_item", type="boolean", nullable=true)
     */
    private $queryItem;

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

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis_cofins", type="boolean", nullable=true)
     */
    private $pisCofins;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=true)
     */
    private $typePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reason_price", type="boolean", nullable=true)
     */
    private $reasonPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="smallint", nullable=true)
     */
    private $transaction;


}

