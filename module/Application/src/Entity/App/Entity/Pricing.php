<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricing
 *
 * @ORM\Table(name="pricing", indexes={@ORM\Index(name="pricing_1", columns={"plu_key", "type_price", "start"})})
 * @ORM\Entity
 */
class Pricing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=false)
     */
    private $typePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promotion", type="boolean", nullable=true)
     */
    private $promotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_promotion", type="bigint", nullable=true)
     */
    private $codePromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $rate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sequence", type="boolean", nullable=true)
     */
    private $sequence;


}

