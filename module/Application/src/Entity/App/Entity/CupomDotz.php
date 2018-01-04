<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CupomDotz
 *
 * @ORM\Table(name="cupom_dotz", indexes={@ORM\Index(name="index_tkt", columns={"store_key", "start_time", "pos_number", "ticket_number", "crypt_password"})})
 * @ORM\Entity
 */
class CupomDotz
{
    /**
     * @var string
     *
     * @ORM\Column(name="crypt_password", type="string", length=80, nullable=false)
     */
    private $cryptPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_amount", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $ticketAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_date", type="date", nullable=false)
     */
    private $validDate;

    /**
     * @var string
     *
     * @ORM\Column(name="allow_change", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $allowChange;

    /**
     * @var string
     *
     * @ORM\Column(name="minimum_sale_amount", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $minimumSaleAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cupom_dotz_date_inc", type="datetime", nullable=true)
     */
    private $cupomDotzDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cupom_dotz_date_alt", type="datetime", nullable=true)
     */
    private $cupomDotzDateAlt;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $amountDue;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=true)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $quantity;


}

