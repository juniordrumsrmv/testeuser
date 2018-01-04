<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentGroup
 *
 * @ORM\Table(name="agent_group")
 * @ORM\Entity
 */
class AgentGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_key", type="bigint", nullable=false)
     */
    private $groupKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey = '0';


}

