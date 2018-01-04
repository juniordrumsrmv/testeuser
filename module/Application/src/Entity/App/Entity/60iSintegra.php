<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 60iSintegra
 *
 * @ORM\Table(name="60I_sintegra", indexes={@ORM\Index(name="index_60I", columns={"store_key", "fiscal_date", "ecf_serial", "ticket_number", "sequence", "plu_id"})})
 * @ORM\Entity
 */
class 60iSintegra
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
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=20, nullable=false)
     */
    private $ecfSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_model", type="string", length=2, nullable=false)
     */
    private $docModel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=16, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="base_amount", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $baseAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_amount", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $taxAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_liq", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $amountLiq;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_bru", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $amountBru;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $discount;

    /**
     * @var integer
     *
     * @ORM\Column(name="Z_number", type="integer", nullable=false)
     */
    private $zNumber;


}

