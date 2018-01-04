<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumItem
 *
 * @ORM\Table(name="accum_item", uniqueConstraints={@ORM\UniqueConstraint(name="index_accum_item", columns={"store_key", "fiscal_date", "pos_number", "plu_id"}), @ORM\UniqueConstraint(name="index_accum_pos", columns={"store_key", "fiscal_date", "plu_id", "pos_number"}), @ORM\UniqueConstraint(name="index_accum_date", columns={"fiscal_date", "store_key", "pos_number", "plu_id"})}, indexes={@ORM\Index(name="index_accum_item_dept", columns={"fiscal_date", "store_key", "department_key"}), @ORM\Index(name="index_accum_item_maker", columns={"fiscal_date", "store_key", "maker_key"})})
 * @ORM\Entity
 */
class AccumItem
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

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
     * @ORM\Column(name="quantity_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantityCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_canc", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $costCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="margin", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $margin;

    /**
     * @var string
     *
     * @ORM\Column(name="return_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="return_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnAmount;

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

    /**
     * @var string
     *
     * @ORM\Column(name="received_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $receivedQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="received_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $receivedAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis_cofins", type="boolean", nullable=true)
     */
    private $pisCofins;


}

