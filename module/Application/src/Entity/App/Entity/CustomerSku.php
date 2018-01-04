<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSku
 *
 * @ORM\Table(name="customer_sku", indexes={@ORM\Index(name="index_sku_change", columns={"last_change_time", "customer_key"}), @ORM\Index(name="index_sku_customer_key", columns={"customer_key"})})
 * @ORM\Entity
 */
class CustomerSku
{
    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_id", type="string", length=30, nullable=false)
     */
    private $customerSkuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_sku_type_key", type="smallint", nullable=false)
     */
    private $customerSkuTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_sku_status", type="boolean", nullable=true)
     */
    private $customerSkuStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_limit", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerSkuLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_amount_left", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerSkuAmountLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_sku_points", type="bigint", nullable=true)
     */
    private $customerSkuPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_password", type="string", length=80, nullable=true)
     */
    private $customerSkuPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_sku_password_md5", type="string", length=80, nullable=true)
     */
    private $customerSkuPasswordMd5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=false)
     */
    private $lastChangeTime;


}

