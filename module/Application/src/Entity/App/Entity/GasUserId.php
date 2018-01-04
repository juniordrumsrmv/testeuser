<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GasUserId
 *
 * @ORM\Table(name="gas_user_id")
 * @ORM\Entity
 */
class GasUserId
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
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="id_number", type="string", length=255, nullable=false)
     */
    private $idNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_status", type="boolean", nullable=true)
     */
    private $idStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inc_date", type="datetime", nullable=true)
     */
    private $incDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upd_date", type="datetime", nullable=true)
     */
    private $updDate;


}

