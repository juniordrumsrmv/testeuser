<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NfceCountFiles
 *
 * @ORM\Table(name="nfce_count_files")
 * @ORM\Entity
 */
class NfceCountFiles
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
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=true)
     */
    private $quantity;


}

