<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReasonStore
 *
 * @ORM\Table(name="reason_store")
 * @ORM\Entity
 */
class ReasonStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=false)
     */
    private $reasonTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;


}

