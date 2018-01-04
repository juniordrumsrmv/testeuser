<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumItemExtra
 *
 * @ORM\Table(name="accum_item_extra", indexes={@ORM\Index(name="index_accum_item_extra_1", columns={"store_key", "plu_id", "sale_type", "invoice_type", "fiscal_date"})})
 * @ORM\Entity
 */
class AccumItemExtra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=false)
     */
    private $saleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_type", type="smallint", nullable=false)
     */
    private $invoiceType;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_plu", type="string", length=22, nullable=false)
     */
    private $descPlu;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=true)
     */
    private $departmentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=true)
     */
    private $makerKey;


}

