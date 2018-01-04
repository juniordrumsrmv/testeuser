<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanMedia
 *
 * @ORM\Table(name="plan_media")
 * @ORM\Entity
 */
class PlanMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_key", type="bigint", nullable=false)
     */
    private $planKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_sub_id", type="smallint", nullable=false)
     */
    private $mediaSubId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

