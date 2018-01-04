<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProducedOrder
 *
 * @ORM\Table(name="produced_order", indexes={@ORM\Index(name="index_store_order", columns={"store_key", "plu_key_prod"})})
 * @ORM\Entity
 */
class ProducedOrder
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
     * @ORM\Column(name="unit_key", type="smallint", nullable=true)
     */
    private $unitKey;

    /**
     * @var string
     *
     * @ORM\Column(name="base_quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $baseQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insert_date", type="datetime", nullable=true)
     */
    private $insertDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="production_date", type="datetime", nullable=true)
     */
    private $productionDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_status", type="smallint", nullable=true)
     */
    private $orderStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="price_suggestion", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $priceSuggestion;


}

