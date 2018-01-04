<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosOperation
 *
 * @ORM\Table(name="pos_operation")
 * @ORM\Entity
 */
class PosOperation
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
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_oper_type", type="smallint", nullable=true)
     */
    private $posOperType;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data1", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $posOperData1;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data2", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $posOperData2;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data3", type="string", length=50, nullable=true)
     */
    private $posOperData3;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data4", type="string", length=50, nullable=true)
     */
    private $posOperData4;


}

