<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionPrizeControl
 *
 * @ORM\Table(name="promotion_prize_control", indexes={@ORM\Index(name="ppc_eft_trans_nsu", columns={"eft_trans_nsu"})})
 * @ORM\Entity
 */
class PromotionPrizeControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppc_date", type="date", nullable=false)
     */
    private $ppcDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppc_time", type="datetime", nullable=false)
     */
    private $ppcTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="ppc_number", type="bigint", nullable=true)
     */
    private $ppcNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_nsu", type="bigint", nullable=false)
     */
    private $eftTransNsu;


}

