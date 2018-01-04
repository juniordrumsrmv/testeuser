<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanSplitType
 *
 * @ORM\Table(name="plan_split_type")
 * @ORM\Entity
 */
class PlanSplitType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_type_key", type="bigint", nullable=false)
     */
    private $planSplitTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_type_desc", type="string", length=128, nullable=false)
     */
    private $planSplitTypeDesc;


}

