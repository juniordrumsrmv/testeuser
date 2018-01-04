<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotzSend
 *
 * @ORM\Table(name="dotz_send")
 * @ORM\Entity
 */
class DotzSend
{
    /**
     * @var integer
     *
     * @ORM\Column(name="file_key", type="bigint", nullable=false)
     */
    private $fileKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_send_time", type="datetime", nullable=false)
     */
    private $lastSendTime;


}

