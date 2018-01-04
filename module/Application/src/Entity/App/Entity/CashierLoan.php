<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierLoan
 *
 * @ORM\Table(name="cashier_loan")
 * @ORM\Entity
 */
class CashierLoan
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_key", type="smallint", nullable=false)
     */
    private $mediaKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insert_time", type="datetime", nullable=true)
     */
    private $insertTime;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

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


}

