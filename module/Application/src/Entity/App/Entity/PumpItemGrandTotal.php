<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PumpItemGrandTotal
 *
 * @ORM\Table(name="pump_item_grand_total")
 * @ORM\Entity
 */
class PumpItemGrandTotal
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pump_number", type="smallint", nullable=false)
     */
    private $pumpNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nozzle_number", type="smallint", nullable=false)
     */
    private $nozzleNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $qty;


}

