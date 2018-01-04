<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierMedia
 *
 * @ORM\Table(name="cashier_media")
 * @ORM\Entity
 */
class CashierMedia
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
     * @var integer
     *
     * @ORM\Column(name="qty_entered", type="bigint", nullable=false)
     */
    private $qtyEntered;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_voided", type="bigint", nullable=false)
     */
    private $qtyVoided;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_loan", type="bigint", nullable=false)
     */
    private $qtyLoan;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_pickup", type="bigint", nullable=false)
     */
    private $qtyPickup;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_entered", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_voided", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountVoided;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_loan", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountLoan;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pickup", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountPickup;


}

