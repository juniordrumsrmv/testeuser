<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity
 */
class Plan
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_key", type="bigint", nullable=false)
     */
    private $planKey;

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
     * @ORM\Column(name="plan_min_payment", type="smallint", nullable=true)
     */
    private $planMinPayment;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_max_payment", type="smallint", nullable=true)
     */
    private $planMaxPayment;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_rate", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $planRate;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_name", type="string", length=50, nullable=true)
     */
    private $planName;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_min_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $planMinAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plan_status", type="boolean", nullable=true)
     */
    private $planStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_start_time", type="datetime", nullable=true)
     */
    private $planStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_end_time", type="datetime", nullable=true)
     */
    private $planEndTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="option_01", type="string", length=250, nullable=true)
     */
    private $option01;

    /**
     * @var string
     *
     * @ORM\Column(name="option_02", type="string", length=250, nullable=true)
     */
    private $option02;

    /**
     * @var string
     *
     * @ORM\Column(name="option_03", type="string", length=250, nullable=true)
     */
    private $option03;

    /**
     * @var string
     *
     * @ORM\Column(name="option_04", type="string", length=250, nullable=true)
     */
    private $option04;

    /**
     * @var string
     *
     * @ORM\Column(name="option_05", type="string", length=250, nullable=true)
     */
    private $option05;

    /**
     * @var string
     *
     * @ORM\Column(name="option_06", type="string", length=250, nullable=true)
     */
    private $option06;

    /**
     * @var string
     *
     * @ORM\Column(name="option_07", type="string", length=250, nullable=true)
     */
    private $option07;

    /**
     * @var string
     *
     * @ORM\Column(name="option_08", type="string", length=250, nullable=true)
     */
    private $option08;

    /**
     * @var string
     *
     * @ORM\Column(name="option_09", type="string", length=250, nullable=true)
     */
    private $option09;

    /**
     * @var string
     *
     * @ORM\Column(name="option_10", type="string", length=250, nullable=true)
     */
    private $option10;


}

