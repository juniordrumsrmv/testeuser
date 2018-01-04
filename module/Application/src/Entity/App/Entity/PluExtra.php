<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluExtra
 *
 * @ORM\Table(name="plu_extra")
 * @ORM\Entity
 */
class PluExtra
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
     * @var string
     *
     * @ORM\Column(name="extra_key", type="string", length=12, nullable=false)
     */
    private $extraKey;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_value", type="string", length=128, nullable=true)
     */
    private $extraValue;


}

