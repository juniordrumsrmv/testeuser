<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KitList
 *
 * @ORM\Table(name="kit_list")
 * @ORM\Entity
 */
class KitList
{
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

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_key", type="integer", nullable=true)
     */
    private $priceKey;


}

