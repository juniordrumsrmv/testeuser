<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumLog
 *
 * @ORM\Table(name="accum_log", uniqueConstraints={@ORM\UniqueConstraint(name="index_date_log", columns={"store_key", "log_date", "pos_number"}), @ORM\UniqueConstraint(name="index_pos_log", columns={"store_key", "pos_number", "log_date"})})
 * @ORM\Entity
 */
class AccumLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="log_date", type="datetime", nullable=true)
     */
    private $logDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="log_msg_code", type="string", length=12, nullable=false)
     */
    private $logMsgCode;

    /**
     * @var string
     *
     * @ORM\Column(name="log_msg_data", type="string", length=80, nullable=false)
     */
    private $logMsgData;


}

