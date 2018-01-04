<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumMaker
 *
 * @ORM\Table(name="accum_maker")
 * @ORM\Entity
 */
class AccumMaker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     */
    private $makerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hour", type="boolean", nullable=false)
     */
    private $hour;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantityCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_canc", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $costCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="margin", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $margin;

    /**
     * @var string
     *
     * @ORM\Column(name="return_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="return_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnAmount;


}

