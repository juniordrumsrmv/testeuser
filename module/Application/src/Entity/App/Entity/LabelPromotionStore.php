<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabelPromotionStore
 *
 * @ORM\Table(name="label_promotion_store")
 * @ORM\Entity
 */
class LabelPromotionStore
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
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

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


}

