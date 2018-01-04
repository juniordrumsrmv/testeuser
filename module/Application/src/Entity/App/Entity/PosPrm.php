<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosPrm
 *
 * @ORM\Table(name="pos_prm")
 * @ORM\Entity
 */
class PosPrm
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
     * @var string
     *
     * @ORM\Column(name="prm", type="string", length=255, nullable=false)
     */
    private $prm;

    /**
     * @var integer
     *
     * @ORM\Column(name="signature", type="bigint", nullable=true)
     */
    private $signature;


}

