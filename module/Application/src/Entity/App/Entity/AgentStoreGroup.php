<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentStoreGroup
 *
 * @ORM\Table(name="agent_store_group")
 * @ORM\Entity
 */
class AgentStoreGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="bigint", nullable=false)
     */
    private $storeGroupKey;


}

