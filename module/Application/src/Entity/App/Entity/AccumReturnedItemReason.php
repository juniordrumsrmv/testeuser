<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumReturnedItemReason
 *
 * @ORM\Table(name="accum_returned_item_reason")
 * @ORM\Entity
 */
class AccumReturnedItemReason
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason", type="smallint", nullable=false)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="smallint", nullable=false)
     */
    private $transaction;

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

