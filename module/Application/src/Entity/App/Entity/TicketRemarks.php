<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketRemarks
 *
 * @ORM\Table(name="ticket_remarks", uniqueConstraints={@ORM\UniqueConstraint(name="ticket_remarks_start_time", columns={"start_time", "store_key", "pos_number", "ticket_number", "remark_time"})})
 * @ORM\Entity
 */
class TicketRemarks
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
     * @var \DateTime
     *
     * @ORM\Column(name="remark_time", type="datetime", nullable=false)
     */
    private $remarkTime;

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
     * @var string
     *
     * @ORM\Column(name="initial_GT", type="decimal", precision=19, scale=3, nullable=true)
     */
    private $initialGt;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=true)
     */
    private $finalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="item_total_GT", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $itemTotalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $amountDue;

    /**
     * @var string
     *
     * @ORM\Column(name="media_total", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $mediaTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="change_total", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $changeTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_total", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $discountTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="item_total", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $itemTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="blob", nullable=true)
     */
    private $remark;


}

