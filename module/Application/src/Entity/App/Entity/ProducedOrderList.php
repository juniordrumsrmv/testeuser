<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProducedOrderList
 *
 * @ORM\Table(name="produced_order_list")
 * @ORM\Entity
 */
class ProducedOrderList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_key", type="bigint", nullable=false)
     */
    private $orderKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_prod", type="bigint", nullable=false)
     */
    private $pluKeyProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_input", type="bigint", nullable=false)
     */
    private $pluKeyInput;

    /**
     * @var string
     *
     * @ORM\Column(name="base_quantity", type="decimal", precision=8, scale=3, nullable=false)
     */
    private $baseQuantity;


}

