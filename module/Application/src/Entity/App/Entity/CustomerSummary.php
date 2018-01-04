<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSummary
 *
 * @ORM\Table(name="customer_summary", indexes={@ORM\Index(name="cs1", columns={"store_key", "pos_number", "ticket_number", "start_time", "summary_bank", "summary_check"})})
 * @ORM\Entity
 */
class CustomerSummary
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
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

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
     * @var integer
     *
     * @ORM\Column(name="summary_bank", type="smallint", nullable=true)
     */
    private $summaryBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="summary_branch", type="smallint", nullable=true)
     */
    private $summaryBranch;

    /**
     * @var integer
     *
     * @ORM\Column(name="summary_account", type="integer", nullable=true)
     */
    private $summaryAccount;

    /**
     * @var integer
     *
     * @ORM\Column(name="summary_check", type="integer", nullable=true)
     */
    private $summaryCheck;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summary_date_check", type="date", nullable=true)
     */
    private $summaryDateCheck;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summary_date_payment", type="date", nullable=true)
     */
    private $summaryDatePayment;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_amount", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $summaryAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_status", type="string", length=1, nullable=true)
     */
    private $summaryStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_type", type="string", length=1, nullable=true)
     */
    private $summaryType;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_alinea", type="string", length=2, nullable=true)
     */
    private $summaryAlinea;

    /**
     * @var string
     *
     * @ORM\Column(name="summary_user", type="string", length=11, nullable=true)
     */
    private $summaryUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summary_date_alt", type="date", nullable=true)
     */
    private $summaryDateAlt;


}

