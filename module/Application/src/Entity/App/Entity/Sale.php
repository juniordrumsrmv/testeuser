<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 *
 * @ORM\Table(name="sale", indexes={@ORM\Index(name="index_received_time", columns={"received_time"}), @ORM\Index(name="index_1", columns={"store_key", "start_time", "pos_number", "ticket_number"}), @ORM\Index(name="index_fiscal", columns={"store_key", "pos_number", "fiscal_date"})})
 * @ORM\Entity
 */
class Sale
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
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_sale_void", type="boolean", nullable=true)
     */
    private $postSaleVoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=true)
     */
    private $saleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountDue;

    /**
     * @var string
     *
     * @ORM\Column(name="change_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $changeAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="change_media_id", type="smallint", nullable=true)
     */
    private $changeMediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="clerk_key", type="bigint", nullable=true)
     */
    private $clerkKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

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
     * @ORM\Column(name="interest", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $interest;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $finalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="void_amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $voidAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="received_time", type="datetime", nullable=true)
     */
    private $receivedTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_start_time", type="datetime", nullable=true)
     */
    private $posStartTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="void_ticket_number", type="integer", nullable=true)
     */
    private $voidTicketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delivery", type="boolean", nullable=true)
     */
    private $delivery;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promotion", type="boolean", nullable=true)
     */
    private $promotion;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=32, nullable=true)
     */
    private $customerId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_id_type", type="boolean", nullable=true)
     */
    private $customerIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotal_discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $subtotalDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=true)
     */
    private $typePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference_price", type="integer", nullable=true)
     */
    private $referencePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="default_price", type="integer", nullable=true)
     */
    private $defaultPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_start", type="bigint", nullable=true)
     */
    private $cpuClockStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_subtotal", type="bigint", nullable=true)
     */
    private $cpuClockSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_end", type="bigint", nullable=true)
     */
    private $cpuClockEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_close_drawer", type="bigint", nullable=true)
     */
    private $cpuClockCloseDrawer;


}

