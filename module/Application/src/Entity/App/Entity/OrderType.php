<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderType
 *
 * @ORM\Table(name="order_type")
 * @ORM\Entity
 */
class OrderType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_type", type="smallint", nullable=false)
     */
    private $orderType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


}

