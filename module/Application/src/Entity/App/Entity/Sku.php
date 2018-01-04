<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sku
 *
 * @ORM\Table(name="sku", indexes={@ORM\Index(name="index_sku_plu_key", columns={"plu_key"})})
 * @ORM\Entity
 */
class Sku
{
    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=false)
     */
    private $skuId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey = '0';


}

