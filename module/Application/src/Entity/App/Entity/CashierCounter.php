<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierCounter
 *
 * @ORM\Table(name="cashier_counter")
 * @ORM\Entity
 */
class CashierCounter
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
     * @ORM\Column(name="counter_number", type="smallint", nullable=false)
     */
    private $counterNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter_times", type="bigint", nullable=false)
     */
    private $counterTimes;

    /**
     * @var string
     *
     * @ORM\Column(name="counter_qty", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $counterQty;

    /**
     * @var string
     *
     * @ORM\Column(name="counter_amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $counterAmount;


}

