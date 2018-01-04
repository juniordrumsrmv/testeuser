<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluPack
 *
 * @ORM\Table(name="plu_pack")
 * @ORM\Entity
 */
class PluPack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_main", type="bigint", nullable=false)
     */
    private $pluKeyMain;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;


}

