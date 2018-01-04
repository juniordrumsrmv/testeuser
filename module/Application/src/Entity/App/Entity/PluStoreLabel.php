<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluStoreLabel
 *
 * @ORM\Table(name="plu_store_label", uniqueConstraints={@ORM\UniqueConstraint(name="index_label", columns={"store_key", "plu_key", "label_type", "label_address"})})
 * @ORM\Entity
 */
class PluStoreLabel
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="label_type", type="smallint", nullable=false)
     */
    private $labelType;

    /**
     * @var string
     *
     * @ORM\Column(name="label_address", type="string", length=30, nullable=true)
     */
    private $labelAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="label_count", type="integer", nullable=true)
     */
    private $labelCount;


}

