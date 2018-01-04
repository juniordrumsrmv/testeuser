<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerStore
 *
 * @ORM\Table(name="customer_store")
 * @ORM\Entity
 */
class CustomerStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sale_time", type="datetime", nullable=true)
     */
    private $lastSaleTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_sale", type="smallint", nullable=true)
     */
    private $qtySale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=false)
     */
    private $lastChangeTime;


}

