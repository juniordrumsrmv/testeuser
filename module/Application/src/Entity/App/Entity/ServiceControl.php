<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceControl
 *
 * @ORM\Table(name="service_control", indexes={@ORM\Index(name="index_service", columns={"service_type_key", "store_key", "pos_number", "ticket_number", "start_time", "plu_id"}), @ORM\Index(name="index_service_ref", columns={"service_type_key", "ref_store_key", "ref_pos_number", "ref_ticket_number", "ref_start_time", "plu_id"})})
 * @ORM\Entity
 */
class ServiceControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="service_number", type="bigint", nullable=false)
     */
    private $serviceNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_type_key", type="smallint", nullable=true)
     */
    private $serviceTypeKey;

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
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="bigint", nullable=true)
     */
    private $transaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_store_key", type="bigint", nullable=true)
     */
    private $refStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_pos_number", type="smallint", nullable=true)
     */
    private $refPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_ticket_number", type="integer", nullable=true)
     */
    private $refTicketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ref_start_time", type="datetime", nullable=true)
     */
    private $refStartTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_transaction", type="bigint", nullable=true)
     */
    private $refTransaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ref_fiscal_date", type="date", nullable=true)
     */
    private $refFiscalDate;

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
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

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
     * @var boolean
     *
     * @ORM\Column(name="reason", type="boolean", nullable=true)
     */
    private $reason;


}

