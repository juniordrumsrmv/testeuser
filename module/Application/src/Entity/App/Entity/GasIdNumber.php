<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GasIdNumber
 *
 * @ORM\Table(name="gas_id_number")
 * @ORM\Entity
 */
class GasIdNumber
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="id_number", type="string", length=255, nullable=false)
     */
    private $idNumber;

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

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_status", type="boolean", nullable=true)
     */
    private $idStatus;


}

