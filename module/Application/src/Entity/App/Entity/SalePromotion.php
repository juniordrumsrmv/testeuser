<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalePromotion
 *
 * @ORM\Table(name="sale_promotion")
 * @ORM\Entity
 */
class SalePromotion
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_type", type="smallint", nullable=true)
     */
    private $promotionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_mode", type="smallint", nullable=true)
     */
    private $promotionMode;


}

