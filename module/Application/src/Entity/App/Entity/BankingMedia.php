<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingMedia
 *
 * @ORM\Table(name="banking_media", indexes={@ORM\Index(name="index_banking_media_1", columns={"store_key", "pos_number", "transaction_number", "start_time", "sequence"})})
 * @ORM\Entity
 */
class BankingMedia
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
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="document_control", type="boolean", nullable=true)
     */
    private $documentControl;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_number", type="integer", nullable=false)
     */
    private $transactionNumber;


}

