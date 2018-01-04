<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreTaxType
 *
 * @ORM\Table(name="store_tax_type")
 * @ORM\Entity
 */
class StoreTaxType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_type_key", type="bigint", nullable=false)
     */
    private $taxTypeKey;


}

