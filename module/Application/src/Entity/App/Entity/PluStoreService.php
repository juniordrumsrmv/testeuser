<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluStoreService
 *
 * @ORM\Table(name="plu_store_service")
 * @ORM\Entity
 */
class PluStoreService
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_period", type="integer", nullable=false)
     */
    private $servicePeriod;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_type_key", type="integer", nullable=false)
     */
    private $serviceTypeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_start_time", type="datetime", nullable=false)
     */
    private $serviceStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_end_time", type="datetime", nullable=false)
     */
    private $serviceEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="service_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $servicePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="service_cost", type="decimal", precision=15, scale=4, nullable=true)
     */
    private $serviceCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_maker_period", type="integer", nullable=true)
     */
    private $serviceMakerPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="service_code", type="string", length=32, nullable=true)
     */
    private $serviceCode;


}

