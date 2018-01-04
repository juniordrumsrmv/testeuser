<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessControl
 *
 * @ORM\Table(name="access_control", uniqueConstraints={@ORM\UniqueConstraint(name="index_control_ch", columns={"entity_key", "agent_key", "access_type_key"})})
 * @ORM\Entity
 */
class AccessControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="access_control_key", type="bigint", nullable=false)
     */
    private $accessControlKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=false)
     */
    private $entityKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="access_type_key", type="integer", nullable=false)
     */
    private $accessTypeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="high_limit_value", type="bigint", nullable=true)
     */
    private $highLimitValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="low_limit_value", type="bigint", nullable=true)
     */
    private $lowLimitValue;

    /**
     * @var string
     *
     * @ORM\Column(name="high_limit_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $highLimitPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="low_limit_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $lowLimitPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="high_limit_quantity", type="smallint", nullable=true)
     */
    private $highLimitQuantity;


}

