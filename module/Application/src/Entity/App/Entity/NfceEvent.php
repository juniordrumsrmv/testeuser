<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NfceEvent
 *
 * @ORM\Table(name="nfce_event")
 * @ORM\Entity
 */
class NfceEvent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nfce_number", type="bigint", nullable=false)
     */
    private $nfceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_time", type="datetime", nullable=false)
     */
    private $eventTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_status", type="smallint", nullable=true)
     */
    private $eventStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="event_desc", type="string", length=250, nullable=true)
     */
    private $eventDesc;


}

