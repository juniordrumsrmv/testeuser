<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpSkuId
 *
 * @ORM\Table(name="np_sku_id")
 * @ORM\Entity
 */
class NpSkuId
{
    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=false)
     */
    private $skuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="np_id", type="bigint", nullable=false)
     */
    private $npId;


}

