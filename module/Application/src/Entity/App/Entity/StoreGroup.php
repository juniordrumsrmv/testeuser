<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreGroup
 *
 * @ORM\Table(name="store_group", uniqueConstraints={@ORM\UniqueConstraint(name="index_store_group_id", columns={"store_group_id"})})
 * @ORM\Entity
 */
class StoreGroup
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
     * @ORM\Column(name="parent_store_group_key", type="smallint", nullable=true)
     */
    private $parentStoreGroupKey;

    /**
     * @var string
     *
     * @ORM\Column(name="store_group_id", type="string", length=12, nullable=false)
     */
    private $storeGroupId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_store", type="boolean", nullable=true)
     */
    private $allowStore;

    /**
     * @var string
     *
     * @ORM\Column(name="store_group_name", type="string", length=50, nullable=true)
     */
    private $storeGroupName;


}

