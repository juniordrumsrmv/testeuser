<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOblata
 *
 * @ORM\Table(name="customer_oblata", indexes={@ORM\Index(name="promokey_custkey", columns={"customer_key", "promotion_key"})})
 * @ORM\Entity
 */
class CustomerOblata
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
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $promotionPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_points_left", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $promotionPointsLeft;


}

