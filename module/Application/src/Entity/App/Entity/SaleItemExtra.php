<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItemExtra
 *
 * @ORM\Table(name="sale_item_extra")
 * @ORM\Entity
 */
class SaleItemExtra
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
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=10, nullable=true)
     */
    private $cfop;

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
     * @var string
     *
     * @ORM\Column(name="tax_reduction", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $taxReduction;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_calculation_base", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $taxCalculationBase;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $taxAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_extra_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $taxExtraPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance_max", type="decimal", precision=5, scale=3, nullable=true)
     */
    private $toleranceMax;

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance_min", type="decimal", precision=5, scale=3, nullable=true)
     */
    private $toleranceMin;


}

