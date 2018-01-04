<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierDocument
 *
 * @ORM\Table(name="cashier_document", indexes={@ORM\Index(name="index_cashier_document_1", columns={"agent_key", "store_key", "pos_number", "trn_number", "cpu_clock"})})
 * @ORM\Entity
 */
class CashierDocument
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_document_key", type="bigint", nullable=false)
     */
    private $cashierDocumentKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="picked", type="boolean", nullable=true)
     */
    private $picked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="swap_type", type="boolean", nullable=true)
     */
    private $swapType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickup_ticket_number", type="integer", nullable=true)
     */
    private $pickupTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock", type="bigint", nullable=false)
     */
    private $cpuClock;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_id", type="string", length=10, nullable=true)
     */
    private $agentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_key", type="smallint", nullable=true)
     */
    private $mediaKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_check", type="boolean", nullable=true)
     */
    private $isCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="negative", type="boolean", nullable=true)
     */
    private $negative;

    /**
     * @var boolean
     *
     * @ORM\Column(name="undone", type="boolean", nullable=true)
     */
    private $undone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_entered", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_type", type="smallint", nullable=true)
     */
    private $documentType;

    /**
     * @var string
     *
     * @ORM\Column(name="approval", type="string", length=16, nullable=true)
     */
    private $approval;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=40, nullable=true)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="document_tag", type="string", length=40, nullable=true)
     */
    private $documentTag;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=40, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_media_key", type="smallint", nullable=true)
     */
    private $extraMediaKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_status", type="smallint", nullable=true)
     */
    private $documentStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type", type="integer", nullable=false)
     */
    private $transactionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=false)
     */
    private $trnNumber;

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


}

