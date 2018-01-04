<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosUpdateControl
 *
 * @ORM\Table(name="pos_update_control", indexes={@ORM\Index(name="pos_update_control_status", columns={"update_type", "store_key", "transaction_status"})})
 * @ORM\Entity
 */
class PosUpdateControl
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="update_type", type="boolean", nullable=false)
     */
    private $updateType;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_number", type="bigint", nullable=false)
     */
    private $updateNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transaction_status", type="boolean", nullable=false)
     */
    private $transactionStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="process_id", type="integer", nullable=false)
     */
    private $processId;


}

