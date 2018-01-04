<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanSplit
 *
 * @ORM\Table(name="plan_split")
 * @ORM\Entity
 */
class PlanSplit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_key", type="bigint", nullable=false)
     */
    private $planKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_splits", type="smallint", nullable=false)
     */
    private $planSplitSplits;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_name", type="string", length=30, nullable=true)
     */
    private $planSplitName;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_rate", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $planSplitRate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plan_split_method", type="boolean", nullable=true)
     */
    private $planSplitMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_min_split_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $planSplitMinSplitAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plan_split_status", type="boolean", nullable=true)
     */
    private $planSplitStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_code_key", type="bigint", nullable=true)
     */
    private $planSplitCodeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_type_key", type="bigint", nullable=true)
     */
    private $planSplitTypeKey = '0';


}

