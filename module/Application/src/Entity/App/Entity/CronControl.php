<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CronControl
 *
 * @ORM\Table(name="cron_control", uniqueConstraints={@ORM\UniqueConstraint(name="index_entity_id", columns={"entity_key", "cronctl_reference_time", "cronctl_start_time"})})
 * @ORM\Entity
 */
class CronControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=true)
     */
    private $entityKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cronctl_reference_time", type="datetime", nullable=true)
     */
    private $cronctlReferenceTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cronctl_start_time", type="datetime", nullable=true)
     */
    private $cronctlStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cronctl_end_time", type="datetime", nullable=true)
     */
    private $cronctlEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cronctl_output", type="string", length=255, nullable=true)
     */
    private $cronctlOutput;


}

