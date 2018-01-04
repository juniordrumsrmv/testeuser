<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 60rSintegra
 *
 * @ORM\Table(name="60R_sintegra", indexes={@ORM\Index(name="index_60R", columns={"store_key", "fiscal_month", "plu_id"})})
 * @ORM\Entity
 */
class 60rSintegra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=2, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_type", type="string", length=1, nullable=false)
     */
    private $subType;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_month", type="string", length=6, nullable=false)
     */
    private $fiscalMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="base_amount", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $baseAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     */
    private $posId;


}

