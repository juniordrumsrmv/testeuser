<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabelPromotion
 *
 * @ORM\Table(name="label_promotion")
 * @ORM\Entity
 */
class LabelPromotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="bigint", nullable=false)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish", type="datetime", nullable=true)
     */
    private $finish;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=true)
     */
    private $reasonTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="label_sku", type="string", length=14, nullable=true)
     */
    private $labelSku;

    /**
     * @var integer
     *
     * @ORM\Column(name="label_quantity", type="integer", nullable=true)
     */
    private $labelQuantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="label_printing_date", type="datetime", nullable=true)
     */
    private $labelPrintingDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;


}

