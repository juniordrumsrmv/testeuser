<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanPluSplitAmount
 *
 * @ORM\Table(name="plan_plu_split_amount", indexes={@ORM\Index(name="ppsa_index_1", columns={"store_key", "plu_key", "ppsa_status", "ppsa_start_time"})})
 * @ORM\Entity
 */
class PlanPluSplitAmount
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ppsa_key", type="bigint", nullable=false)
     */
    private $ppsaKey;

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
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_sub_id", type="smallint", nullable=false)
     */
    private $mediaSubId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ppsa_splits", type="smallint", nullable=false)
     */
    private $ppsaSplits;

    /**
     * @var string
     *
     * @ORM\Column(name="ppsa_split_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ppsaSplitAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ppsa_status", type="boolean", nullable=true)
     */
    private $ppsaStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppsa_start_time", type="datetime", nullable=true)
     */
    private $ppsaStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppsa_end_time", type="datetime", nullable=true)
     */
    private $ppsaEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="ppsa_interest_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $ppsaInterestPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="ppsa_delayed_payment_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $ppsaDelayedPaymentPercent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

