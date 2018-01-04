<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardParameter
 *
 * @ORM\Table(name="dashboard_parameter")
 * @ORM\Entity
 */
class DashboardParameter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prm_key", type="bigint", nullable=false)
     */
    private $prmKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="prm_type", type="bigint", nullable=false)
     */
    private $prmType;

    /**
     * @var string
     *
     * @ORM\Column(name="prm_id", type="string", length=24, nullable=false)
     */
    private $prmId;

    /**
     * @var string
     *
     * @ORM\Column(name="prm_value", type="text", length=65535, nullable=true)
     */
    private $prmValue;


}

