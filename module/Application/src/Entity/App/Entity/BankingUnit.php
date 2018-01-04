<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingUnit
 *
 * @ORM\Table(name="banking_unit", indexes={@ORM\Index(name="index_banking_1", columns={"store_key", "pos_number", "pickup_ticket_number", "status"}), @ORM\Index(name="banking_unit_2", columns={"media_id", "location_key", "amount_verified"}), @ORM\Index(name="banking_unit_3", columns={"extended_media_id", "location_key", "amount_verified"}), @ORM\Index(name="banking_unit_4", columns={"store_key", "pos_number", "pickup_transaction_number", "status"})})
 * @ORM\Entity
 */
class BankingUnit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="banking_unit_key", type="bigint", nullable=false)
     */
    private $bankingUnitKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=true)
     */
    private $locationKey;

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
     * @ORM\Column(name="pickup_ticket_number", type="integer", nullable=true)
     */
    private $pickupTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="issuer_id", type="string", length=20, nullable=true)
     */
    private $issuerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=true)
     */
    private $mediaId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="left_in_drawer", type="boolean", nullable=true)
     */
    private $leftInDrawer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_check", type="boolean", nullable=true)
     */
    private $isCheck;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pos", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPos;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pos_entered", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPosEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_declared", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountDeclared;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_verified", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountVerified;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitValue;

    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string", length=15, nullable=true)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=15, nullable=true)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=15, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="check_number", type="string", length=15, nullable=true)
     */
    private $checkNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc7", type="string", length=64, nullable=true)
     */
    private $cmc7;

    /**
     * @var string
     *
     * @ORM\Column(name="card_number", type="string", length=32, nullable=true)
     */
    private $cardNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_due", type="date", nullable=true)
     */
    private $dateDue;

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
     * @ORM\Column(name="verifier_key", type="bigint", nullable=true)
     */
    private $verifierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=true)
     */
    private $extendedMediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickup_transaction_number", type="integer", nullable=true)
     */
    private $pickupTransactionNumber;


}

