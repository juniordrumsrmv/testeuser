<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalePromotionItem
 *
 * @ORM\Table(name="sale_promotion_item")
 * @ORM\Entity
 */
class SalePromotionItem
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
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=48, nullable=true)
     */
    private $shortDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=true)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_min", type="bigint", nullable=true)
     */
    private $quantityMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_max", type="bigint", nullable=true)
     */
    private $quantityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_promo", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitPricePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_price_promo", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPricePromo;


}

