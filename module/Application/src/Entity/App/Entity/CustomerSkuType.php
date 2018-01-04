<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSkuType
 *
 * @ORM\Table(name="customer_sku_type")
 * @ORM\Entity
 */
class CustomerSkuType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_sku_type_key", type="smallint", nullable=false)
     */
    private $customerSkuTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_type_name", type="string", length=20, nullable=true)
     */
    private $customerSkuTypeName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_send", type="boolean", nullable=true)
     */
    private $customerSkuTypeSend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_1", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_2", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_3", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_4", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_5", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_6", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_7", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_type_flag_8", type="boolean", nullable=true)
     */
    private $customerSkuTypeFlag8;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

