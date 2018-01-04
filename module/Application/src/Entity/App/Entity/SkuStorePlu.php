<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkuStorePlu
 *
 * @ORM\Table(name="sku_store_plu", indexes={@ORM\Index(name="index_sku_id", columns={"sku_id", "store_key", "plu_key"})})
 * @ORM\Entity
 */
class SkuStorePlu
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=false)
     */
    private $skuId;


}

