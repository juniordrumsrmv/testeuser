<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 60mSintegra
 *
 * @ORM\Table(name="60M_sintegra", indexes={@ORM\Index(name="index_60M", columns={"store_key", "fiscal_date", "ecf_serial", "ticket_number"})})
 * @ORM\Entity
 */
class 60mSintegra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=2, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_type", type="string", length=1, nullable=false)
     */
    private $subType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=20, nullable=false)
     */
    private $ecfSerial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_model", type="string", length=2, nullable=false)
     */
    private $docModel;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_ticket", type="integer", nullable=false)
     */
    private $initialTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Z_number", type="integer", nullable=false)
     */
    private $zNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="restart_count", type="integer", nullable=false)
     */
    private $restartCount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $finalGt;


}

