<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnControl
 *
 * @ORM\Table(name="return_control", uniqueConstraints={@ORM\UniqueConstraint(name="index_return_control_trn", columns={"store_key", "pos_number", "transaction", "start_time"}), @ORM\UniqueConstraint(name="index_return_control_internal", columns={"store_key", "internal_return_number", "start_time"})})
 * @ORM\Entity
 */
class ReturnControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="return_number", type="bigint", nullable=false)
     */
    private $returnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="bigint", nullable=true)
     */
    private $transaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_store_key", type="bigint", nullable=true)
     */
    private $usedStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_pos_number", type="smallint", nullable=true)
     */
    private $usedPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_ticket_number", type="integer", nullable=true)
     */
    private $usedTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_transaction", type="bigint", nullable=true)
     */
    private $usedTransaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="used_start_time", type="datetime", nullable=true)
     */
    private $usedStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="used_fiscal_date", type="date", nullable=true)
     */
    private $usedFiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason", type="bigint", nullable=true)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="internal_return_number", type="bigint", nullable=true)
     */
    private $internalReturnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=true)
     */
    private $type = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validity_begin", type="date", nullable=true)
     */
    private $validityBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validity_end", type="date", nullable=true)
     */
    private $validityEnd;


}

