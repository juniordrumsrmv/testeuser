<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PafTicket
 *
 * @ORM\Table(name="paf_ticket", indexes={@ORM\Index(name="index_ticket_ecf", columns={"store_key", "ecf_number", "fiscal_date", "ticket_number"})})
 * @ORM\Entity
 */
class PafTicket
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
     * @var string
     *
     * @ORM\Column(name="paf_ticket_type", type="string", length=2, nullable=true)
     */
    private $pafTicketType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=true)
     */
    private $trnNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="GNF", type="integer", nullable=true)
     */
    private $gnf;

    /**
     * @var integer
     *
     * @ORM\Column(name="GRG", type="integer", nullable=true)
     */
    private $grg;

    /**
     * @var integer
     *
     * @ORM\Column(name="CDC", type="integer", nullable=true)
     */
    private $cdc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CCF", type="integer", nullable=true)
     */
    private $ccf;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_status", type="smallint", nullable=true)
     */
    private $trnStatus;


}

