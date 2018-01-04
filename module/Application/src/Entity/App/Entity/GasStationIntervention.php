<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GasStationIntervention
 *
 * @ORM\Table(name="gas_station_intervention")
 * @ORM\Entity
 */
class GasStationIntervention
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
     * @ORM\Column(name="pump_number", type="bigint", nullable=false)
     */
    private $pumpNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nozzle_number", type="bigint", nullable=false)
     */
    private $nozzleNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="intervention_number", type="bigint", nullable=false)
     */
    private $interventionNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_reason", type="string", length=64, nullable=true)
     */
    private $interventionReason;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_name", type="string", length=64, nullable=true)
     */
    private $interventionName;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_sku_co", type="string", length=20, nullable=true)
     */
    private $interventionSkuCo;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_sku", type="string", length=20, nullable=true)
     */
    private $interventionSku;

    /**
     * @var string
     *
     * @ORM\Column(name="read_value_initial", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $readValueInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="read_value_final", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $readValueFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="calibration_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $calibrationValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_hour", type="time", nullable=true)
     */
    private $fiscalHour;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_number_seal", type="bigint", nullable=true)
     */
    private $initialNumberSeal;

    /**
     * @var integer
     *
     * @ORM\Column(name="final_number_seal", type="bigint", nullable=true)
     */
    private $finalNumberSeal;


}

