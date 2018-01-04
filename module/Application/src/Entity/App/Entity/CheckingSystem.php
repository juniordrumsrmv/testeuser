<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CheckingSystem
 *
 * @ORM\Table(name="checking_system", indexes={@ORM\Index(name="index_checking_system", columns={"store_key", "pos_number", "checking_system_type", "checking_system_time"})})
 * @ORM\Entity
 */
class CheckingSystem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="checking_system_key", type="bigint", nullable=false)
     */
    private $checkingSystemKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="checking_system_type", type="smallint", nullable=true)
     */
    private $checkingSystemType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checking_system_time", type="datetime", nullable=true)
     */
    private $checkingSystemTime;

    /**
     * @var string
     *
     * @ORM\Column(name="checking_system_data", type="blob", length=65535, nullable=true)
     */
    private $checkingSystemData;


}

