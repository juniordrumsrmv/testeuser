<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiftListAddress
 *
 * @ORM\Table(name="gift_list_address")
 * @ORM\Entity
 */
class GiftListAddress
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
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="custaddr_type", type="smallint", nullable=false)
     */
    private $custaddrType;


}

