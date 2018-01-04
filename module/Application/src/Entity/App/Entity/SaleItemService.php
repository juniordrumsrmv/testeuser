<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItemService
 *
 * @ORM\Table(name="sale_item_service")
 * @ORM\Entity
 */
class SaleItemService
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
     * @ORM\Column(name="item_sequence", type="smallint", nullable=false)
     */
    private $itemSequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="sis_period", type="integer", nullable=false)
     */
    private $sisPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $sisPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $sisDiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_increase", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $sisIncrease;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_cost", type="decimal", precision=15, scale=4, nullable=true)
     */
    private $sisCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="sis_type_key", type="integer", nullable=true)
     */
    private $sisTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_id", type="string", length=32, nullable=true)
     */
    private $sisId;


}

