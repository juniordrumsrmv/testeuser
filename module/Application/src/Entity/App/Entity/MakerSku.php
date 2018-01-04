<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MakerSku
 *
 * @ORM\Table(name="maker_sku", indexes={@ORM\Index(name="index_sku_maker_key", columns={"maker_key"})})
 * @ORM\Entity
 */
class MakerSku
{
    /**
     * @var string
     *
     * @ORM\Column(name="maker_sku_id", type="string", length=30, nullable=false)
     */
    private $makerSkuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_sku_type_key", type="smallint", nullable=false)
     */
    private $makerSkuTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     */
    private $makerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="maker_sku_status", type="boolean", nullable=true)
     */
    private $makerSkuStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

