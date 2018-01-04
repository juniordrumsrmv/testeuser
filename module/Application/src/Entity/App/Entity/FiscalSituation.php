<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalSituation
 *
 * @ORM\Table(name="fiscal_situation", uniqueConstraints={@ORM\UniqueConstraint(name="index_fiscal", columns={"merchandise_origin", "fiscal_situation", "operation_type", "operation", "destine", "origin_region", "destine_region", "cfop"})})
 * @ORM\Entity
 */
class FiscalSituation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fiscal_situation", type="smallint", nullable=false)
     */
    private $fiscalSituation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation_type", type="boolean", nullable=false)
     */
    private $operationType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation", type="boolean", nullable=false)
     */
    private $operation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="destine", type="boolean", nullable=false)
     */
    private $destine;

    /**
     * @var boolean
     *
     * @ORM\Column(name="origin_region", type="boolean", nullable=false)
     */
    private $originRegion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="destine_region", type="boolean", nullable=false)
     */
    private $destineRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cfop", type="smallint", nullable=false)
     */
    private $cfop;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_percent", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $extraPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="red_calc_base", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $redCalcBase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="merchandise_origin", type="boolean", nullable=false)
     */
    private $merchandiseOrigin;


}

