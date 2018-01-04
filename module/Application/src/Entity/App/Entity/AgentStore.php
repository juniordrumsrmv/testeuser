<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentStore
 *
 * @ORM\Table(name="agent_store")
 * @ORM\Entity
 */
class AgentStore
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
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;


}

