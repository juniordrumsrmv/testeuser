<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nozzle
 *
 * @ORM\Table(name="nozzle")
 * @ORM\Entity
 */
class Nozzle
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
     * @ORM\Column(name="tank_number", type="bigint", nullable=false)
     */
    private $tankNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nozzle_number", type="bigint", nullable=false)
     */
    private $nozzleNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="pump_number", type="bigint", nullable=false)
     */
    private $pumpNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="increase_gt_qty", type="bigint", nullable=true)
     */
    private $increaseGtQty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="increase_gt_amo", type="bigint", nullable=true)
     */
    private $increaseGtAmo = '0';


}

