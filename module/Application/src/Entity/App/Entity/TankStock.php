<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TankStock
 *
 * @ORM\Table(name="tank_stock")
 * @ORM\Entity
 */
class TankStock
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
     * @ORM\Column(name="tank_number", type="smallint", nullable=false)
     */
    private $tankNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stock_date", type="date", nullable=false)
     */
    private $stockDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="tank_water", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $tankWater;

    /**
     * @var string
     *
     * @ORM\Column(name="tank_temperature", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $tankTemperature;

    /**
     * @var integer
     *
     * @ORM\Column(name="tank_flag_input", type="smallint", nullable=true)
     */
    private $tankFlagInput;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_in_stock", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantityInStock;


}

