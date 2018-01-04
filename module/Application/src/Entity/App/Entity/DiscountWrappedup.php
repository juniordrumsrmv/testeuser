<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountWrappedup
 *
 * @ORM\Table(name="discount_wrappedup")
 * @ORM\Entity
 */
class DiscountWrappedup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dst_key", type="bigint", nullable=false)
     */
    private $dstKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wrappedup_type", type="boolean", nullable=false)
     */
    private $wrappedupType;

    /**
     * @var integer
     *
     * @ORM\Column(name="wrappedup_key", type="bigint", nullable=false)
     */
    private $wrappedupKey;


}

