<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestControl
 *
 * @ORM\Table(name="request_control", indexes={@ORM\Index(name="index_request", columns={"request_store_key", "request_pos_number", "request_trn_number", "request_date"})})
 * @ORM\Entity
 */
class RequestControl
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
     * @ORM\Column(name="request_store_key", type="bigint", nullable=false)
     */
    private $requestStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_pos_number", type="smallint", nullable=false)
     */
    private $requestPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_trn_number", type="bigint", nullable=false)
     */
    private $requestTrnNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_date", type="date", nullable=false)
     */
    private $requestDate;

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
     * @var integer
     *
     * @ORM\Column(name="request_ticket_number", type="integer", nullable=true)
     */
    private $requestTicketNumber;


}

