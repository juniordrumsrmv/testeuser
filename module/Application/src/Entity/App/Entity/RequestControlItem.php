<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestControlItem
 *
 * @ORM\Table(name="request_control_item", indexes={@ORM\Index(name="index_request", columns={"request_store_key", "request_pos_number", "request_trn_number", "request_date"})})
 * @ORM\Entity
 */
class RequestControlItem
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
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=true)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=true)
     */
    private $trnNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_type", type="boolean", nullable=true)
     */
    private $eventType;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_date", type="date", nullable=true)
     */
    private $requestDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_store_key", type="bigint", nullable=true)
     */
    private $requestStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_pos_number", type="smallint", nullable=true)
     */
    private $requestPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_ticket_number", type="integer", nullable=true)
     */
    private $requestTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_trn_number", type="bigint", nullable=true)
     */
    private $requestTrnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_plu_id", type="bigint", nullable=true)
     */
    private $requestPluId;

    /**
     * @var string
     *
     * @ORM\Column(name="request_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $requestQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="request_unit_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $requestUnitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="request_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $requestAmount;


}

