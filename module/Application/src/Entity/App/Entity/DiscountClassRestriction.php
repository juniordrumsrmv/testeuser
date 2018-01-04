<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountClassRestriction
 *
 * @ORM\Table(name="discount_class_restriction")
 * @ORM\Entity
 */
class DiscountClassRestriction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dst_key", type="bigint", nullable=false)
     */
    private $dstKey;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=25, nullable=false)
     */
    private $class;


}

