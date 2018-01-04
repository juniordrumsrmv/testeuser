<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalMap
 *
 * @ORM\Table(name="fiscal_map", uniqueConstraints={@ORM\UniqueConstraint(name="index_ecf_map", columns={"store_key", "fiscal_date", "ecf_number"})}, indexes={@ORM\Index(name="index_ecf_map_1", columns={"store_key", "ecf_number", "fiscal_date", "Z_number", "ticket_number"})})
 * @ORM\Entity
 */
class FiscalMap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

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
     * @var integer
     *
     * @ORM\Column(name="Z_number", type="integer", nullable=false)
     */
    private $zNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="initial_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $initialGt;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $finalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="void", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $void;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="increase", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $increase;

    /**
     * @var integer
     *
     * @ORM\Column(name="map_number", type="integer", nullable=false)
     */
    private $mapNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_ticket", type="integer", nullable=false)
     */
    private $initialTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="restart_count", type="integer", nullable=false)
     */
    private $restartCount;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=30, nullable=false)
     */
    private $ecfSerial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_alter", type="datetime", nullable=true)
     */
    private $dateAlter;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=true)
     */
    private $userKey = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status_inc", type="boolean", nullable=true)
     */
    private $statusInc = '1';


}

