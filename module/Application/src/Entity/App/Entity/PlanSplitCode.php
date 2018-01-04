<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanSplitCode
 *
 * @ORM\Table(name="plan_split_code")
 * @ORM\Entity
 */
class PlanSplitCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_code_key", type="bigint", nullable=false)
     */
    private $planSplitCodeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_code_desc", type="string", length=128, nullable=false)
     */
    private $planSplitCodeDesc;


}

