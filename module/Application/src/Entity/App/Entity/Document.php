<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document", indexes={@ORM\Index(name="index_document_1", columns={"store_key", "pos_number", "transaction_number", "start_time"}), @ORM\Index(name="index_document_id", columns={"document_type", "document_id"})})
 * @ORM\Entity
 */
class Document
{
    /**
     * @var integer
     *
     * @ORM\Column(name="document_key", type="bigint", nullable=false)
     */
    private $documentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_type", type="smallint", nullable=false)
     */
    private $documentType;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=255, nullable=false)
     */
    private $documentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
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
     * @ORM\Column(name="transaction_number", type="integer", nullable=true)
     */
    private $transactionNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;


}

