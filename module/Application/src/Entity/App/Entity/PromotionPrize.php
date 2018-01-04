<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionPrize
 *
 * @ORM\Table(name="promotion_prize")
 * @ORM\Entity
 */
class PromotionPrize
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="smallint", nullable=false)
     */
    private $storeGroupKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_number", type="bigint", nullable=false)
     */
    private $initialNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="increase", type="bigint", nullable=false)
     */
    private $increase;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

