<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CostCenter
 *
 * @ORM\Table(name="cost_center")
 * @ORM\Entity
 */
class CostCenter
{
    /**
     * @var string
     *
     * @ORM\Column(name="cstc_id", type="string", length=12, nullable=false)
     */
    private $cstcId;

    /**
     * @var string
     *
     * @ORM\Column(name="cstc_name", type="string", length=50, nullable=true)
     */
    private $cstcName;


}

