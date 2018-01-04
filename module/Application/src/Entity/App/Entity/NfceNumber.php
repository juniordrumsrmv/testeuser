<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NfceNumber
 *
 * @ORM\Table(name="nfce_number")
 * @ORM\Entity
 */
class NfceNumber
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
     * @ORM\Column(name="nf_number", type="bigint", nullable=false)
     */
    private $nfNumber;


}

