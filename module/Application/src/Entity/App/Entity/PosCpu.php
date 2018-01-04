<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosCpu
 *
 * @ORM\Table(name="pos_cpu")
 * @ORM\Entity
 */
class PosCpu
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
     * @var boolean
     *
     * @ORM\Column(name="processor_number", type="boolean", nullable=false)
     */
    private $processorNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_id", type="string", length=255, nullable=true)
     */
    private $vendorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_family", type="smallint", nullable=true)
     */
    private $cpuFamily;

    /**
     * @var integer
     *
     * @ORM\Column(name="model", type="smallint", nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="model_name", type="string", length=255, nullable=true)
     */
    private $modelName;

    /**
     * @var integer
     *
     * @ORM\Column(name="stepping", type="smallint", nullable=true)
     */
    private $stepping;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_mhz", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $cpuMhz;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_size", type="string", length=255, nullable=true)
     */
    private $cacheSize;

    /**
     * @var boolean
     *
     * @ORM\Column(name="physical_id", type="boolean", nullable=true)
     */
    private $physicalId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="siblings", type="boolean", nullable=true)
     */
    private $siblings;

    /**
     * @var boolean
     *
     * @ORM\Column(name="core_id", type="boolean", nullable=true)
     */
    private $coreId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpu_cores", type="boolean", nullable=true)
     */
    private $cpuCores;

    /**
     * @var string
     *
     * @ORM\Column(name="fpu", type="string", length=8, nullable=true)
     */
    private $fpu;

    /**
     * @var string
     *
     * @ORM\Column(name="fpu_exception", type="string", length=8, nullable=true)
     */
    private $fpuException;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpuid_level", type="boolean", nullable=true)
     */
    private $cpuidLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="wp", type="string", length=8, nullable=true)
     */
    private $wp;

    /**
     * @var string
     *
     * @ORM\Column(name="flags", type="string", length=255, nullable=true)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="bogomips", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bogomips;

    /**
     * @var integer
     *
     * @ORM\Column(name="clflush_size", type="smallint", nullable=true)
     */
    private $clflushSize;


}

