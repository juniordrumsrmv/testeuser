<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerStatus
 *
 * @ORM\Table(name="customer_status")
 * @ORM\Entity
 */
class CustomerStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_status", type="smallint", nullable=true)
     */
    private $customerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_limit", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_amount_left", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerAmountLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_points", type="bigint", nullable=true)
     */
    private $customerPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_comment", type="text", length=65535, nullable=true)
     */
    private $customerComment;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_message", type="text", length=65535, nullable=true)
     */
    private $customerMessage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_flag_message", type="boolean", nullable=true)
     */
    private $customerFlagMessage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_flag_discount", type="boolean", nullable=true)
     */
    private $customerFlagDiscount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_date_discount", type="date", nullable=true)
     */
    private $customerDateDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_qtt_limit", type="smallint", nullable=true)
     */
    private $customerQttLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_qtt_left", type="smallint", nullable=true)
     */
    private $customerQttLeft;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_qtt_date", type="date", nullable=true)
     */
    private $customerQttDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_flag_invoice", type="boolean", nullable=true)
     */
    private $customerFlagInvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_idt_limit", type="smallint", nullable=true)
     */
    private $customerIdtLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_idt_left", type="smallint", nullable=true)
     */
    private $customerIdtLeft;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_idt_date", type="date", nullable=true)
     */
    private $customerIdtDate;


}

