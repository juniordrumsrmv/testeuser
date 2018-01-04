<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreGroupStore
 *
 * @ORM\Table(name="store_group_store")
 * @ORM\Entity
 */
class StoreGroupStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="smallint", nullable=false)
     */
    private $storeGroupKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;


}

