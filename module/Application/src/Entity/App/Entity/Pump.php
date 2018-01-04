<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pump
 *
 * @ORM\Table(name="pump")
 * @ORM\Entity
 */
class Pump
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
     * @ORM\Column(name="pump_number", type="smallint", nullable=false)
     */
    private $pumpNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_name", type="string", length=30, nullable=true)
     */
    private $pumpName;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_serial", type="string", length=30, nullable=true)
     */
    private $pumpSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_manufacturer", type="string", length=60, nullable=true)
     */
    private $pumpManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_model", type="string", length=40, nullable=true)
     */
    private $pumpModel;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_id_meter", type="string", length=1, nullable=true)
     */
    private $pumpIdMeter;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_num_seal", type="string", length=20, nullable=true)
     */
    private $pumpNumSeal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pump_date_seal", type="date", nullable=true)
     */
    private $pumpDateSeal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pump_date_inc", type="datetime", nullable=true)
     */
    private $pumpDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pump_date_alt", type="datetime", nullable=true)
     */
    private $pumpDateAlt;


}

