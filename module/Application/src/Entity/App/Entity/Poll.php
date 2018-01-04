<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poll
 *
 * @ORM\Table(name="poll")
 * @ORM\Entity
 */
class Poll
{
    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     */
    private $pollKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="poll_type", type="boolean", nullable=true)
     */
    private $pollType;

    /**
     * @var string
     *
     * @ORM\Column(name="poll_name", type="string", length=255, nullable=true)
     */
    private $pollName;

    /**
     * @var string
     *
     * @ORM\Column(name="poll_display_name", type="string", length=255, nullable=true)
     */
    private $pollDisplayName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_time", type="datetime", nullable=true)
     */
    private $finishTime;


}

