<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventControl
 *
 * @ORM\Table(name="event_control", indexes={@ORM\Index(name="event_control_index", columns={"evctl_id", "agent_key"})})
 * @ORM\Entity
 */
class EventControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="evctl_key", type="bigint", nullable=false)
     */
    private $evctlKey;

    /**
     * @var string
     *
     * @ORM\Column(name="evctl_id", type="string", length=32, nullable=false)
     */
    private $evctlId;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=true)
     */
    private $agentKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evctl_time", type="datetime", nullable=true)
     */
    private $evctlTime;


}

