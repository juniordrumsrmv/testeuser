<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EftTransaction
 *
 * @ORM\Table(name="eft_transaction")
 * @ORM\Entity
 */
class EftTransaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_key", type="bigint", nullable=false)
     */
    private $eftTransKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_nsu", type="bigint", nullable=true)
     */
    private $eftTransNsu;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_family", type="string", length=10, nullable=false)
     */
    private $eftTransFamily;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_store", type="bigint", nullable=false)
     */
    private $eftTransStore;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_pos", type="smallint", nullable=false)
     */
    private $eftTransPos;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_type", type="smallint", nullable=true)
     */
    private $eftTransType;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_status", type="smallint", nullable=false)
     */
    private $eftTransStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eft_trans_start_time", type="datetime", nullable=true)
     */
    private $eftTransStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eft_trans_finish_time", type="datetime", nullable=true)
     */
    private $eftTransFinishTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_server_nsu", type="bigint", nullable=true)
     */
    private $eftTransServerNsu;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_host_nsu", type="bigint", nullable=true)
     */
    private $eftTransHostNsu;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_message", type="blob", length=65535, nullable=true)
     */
    private $eftTransMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_server_message", type="blob", length=65535, nullable=true)
     */
    private $eftTransServerMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_ack_message", type="blob", length=65535, nullable=true)
     */
    private $eftTransAckMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_document", type="string", length=255, nullable=true)
     */
    private $eftTransDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_customer_id", type="string", length=255, nullable=true)
     */
    private $eftTransCustomerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_customer_key", type="bigint", nullable=true)
     */
    private $eftTransCustomerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_media_id", type="smallint", nullable=true)
     */
    private $eftTransMediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $eftTransAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_cashier_key", type="bigint", nullable=true)
     */
    private $eftTransCashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_authorizer_key", type="bigint", nullable=true)
     */
    private $eftTransAuthorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_extra_ticket", type="string", length=255, nullable=true)
     */
    private $eftTransExtraTicket;


}

