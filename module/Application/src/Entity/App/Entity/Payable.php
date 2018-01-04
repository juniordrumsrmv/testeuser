<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payable
 *
 * @ORM\Table(name="payable")
 * @ORM\Entity
 */
class Payable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cstc_id", type="string", length=12, nullable=false)
     */
    private $cstcId;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=255, nullable=false)
     */
    private $documentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_number", type="integer", nullable=true)
     */
    private $invoiceNumber = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduled_date", type="date", nullable=true)
     */
    private $scheduledDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="date", nullable=true)
     */
    private $paymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_paid", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPaid;

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
     * @var boolean
     *
     * @ORM\Column(name="splits", type="boolean", nullable=true)
     */
    private $splits;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=true)
     */
    private $locationKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


}

