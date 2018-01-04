<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluStore
 *
 * @ORM\Table(name="plu_store", indexes={@ORM\Index(name="index_plu_store_1", columns={"store_key", "last_change_time"})})
 * @ORM\Entity
 */
class PluStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desired_margin_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $desiredMarginPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_in_stock", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantityInStock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="out_of_stock_day", type="date", nullable=true)
     */
    private $outOfStockDay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_entered_day", type="date", nullable=true)
     */
    private $lastEnteredDay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sale_day", type="date", nullable=true)
     */
    private $lastSaleDay;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_type_key", type="integer", nullable=true)
     */
    private $taxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_tax_type", type="integer", nullable=true)
     */
    private $invoiceTaxType;

    /**
     * @var string
     *
     * @ORM\Column(name="minimal_stock", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $minimalStock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_inventory_day", type="date", nullable=true)
     */
    private $lastInventoryDay;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_inventory", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantityInventory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="not_for_sale", type="boolean", nullable=true)
     */
    private $notForSale;

    /**
     * @var string
     *
     * @ORM\Column(name="split_interest_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $splitInterestPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="delayed_payment_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $delayedPaymentPercent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="min_splits", type="boolean", nullable=true)
     */
    private $minSplits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="max_splits", type="boolean", nullable=true)
     */
    private $maxSplits;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_type", type="smallint", nullable=true)
     */
    private $orderType;

    /**
     * @var integer
     *
     * @ORM\Column(name="operation_type", type="smallint", nullable=true)
     */
    private $operationType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="qty_from_amount", type="boolean", nullable=true)
     */
    private $qtyFromAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $wholesaleQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="adder", type="bigint", nullable=true)
     */
    private $adder;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax1", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax1;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax2", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax2;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_plu_key", type="bigint", nullable=true)
     */
    private $basePluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_base_plu", type="boolean", nullable=true)
     */
    private $isBasePlu;


}

