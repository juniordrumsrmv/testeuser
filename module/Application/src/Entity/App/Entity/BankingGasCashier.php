<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingGasCashier
 *
 * @ORM\Table(name="banking_gas_cashier", indexes={@ORM\Index(name="banking_gas_cashier_key", columns={"store_key", "pos_number", "ticket_number", "start_time", "cashier_key"})})
 * @ORM\Entity
 */
class BankingGasCashier
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
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;


}

