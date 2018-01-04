<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiftListItem
 *
 * @ORM\Table(name="gift_list_item", indexes={@ORM\Index(name="index_gift_list_item", columns={"gift_list_key", "long_description"})})
 * @ORM\Entity
 */
class GiftListItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_key", type="bigint", nullable=false)
     */
    private $giftListKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="long_description", type="string", length=50, nullable=true)
     */
    private $longDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $saleQuantity;


}

