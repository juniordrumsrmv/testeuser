<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent", uniqueConstraints={@ORM\UniqueConstraint(name="index_agent_id", columns={"agent_type", "id"})})
 * @ORM\Entity
 */
class Agent
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
     * @ORM\Column(name="agent_type", type="integer", nullable=false)
     */
    private $agentType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=16, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=255, nullable=true)
     */
    private $remark;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sub_type", type="boolean", nullable=true)
     */
    private $subType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_send_group", type="boolean", nullable=true)
     */
    private $posSendGroup = '0';


}

