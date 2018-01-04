<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountType
 *
 * @ORM\Table(name="discount_type")
 * @ORM\Entity
 */
class DiscountType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dst_key", type="bigint", nullable=false)
     */
    private $dstKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dst_start_time", type="datetime", nullable=false)
     */
    private $dstStartTime;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_name", type="string", length=60, nullable=false)
     */
    private $dstName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_application", type="boolean", nullable=true)
     */
    private $dstApplication;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_mec", type="boolean", nullable=true)
     */
    private $dstMec;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_min_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMinQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_max_percent", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMaxPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_max_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMaxValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dst_end_time", type="datetime", nullable=true)
     */
    private $dstEndTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_accum_item", type="boolean", nullable=true)
     */
    private $dstAccumItem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_accum_subtotal", type="boolean", nullable=true)
     */
    private $dstAccumSubtotal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_restriction", type="boolean", nullable=true)
     */
    private $dstRestriction;

    /**
     * @var string
     *
     * @ORM\Column(name="dst_max_accum_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $dstMaxAccumValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_ind_exceed", type="boolean", nullable=true)
     */
    private $dstIndExceed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_show_accum", type="boolean", nullable=true)
     */
    private $dstShowAccum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_error_correction", type="boolean", nullable=true)
     */
    private $dstErrorCorrection;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_ind_kit", type="boolean", nullable=true)
     */
    private $dstIndKit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_ind_bonus", type="boolean", nullable=true)
     */
    private $dstIndBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_require_prev_aut", type="boolean", nullable=true)
     */
    private $dstRequirePrevAut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_dismissal_prev_aut", type="boolean", nullable=true)
     */
    private $dstDismissalPrevAut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_customer_require", type="boolean", nullable=true)
     */
    private $dstCustomerRequire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_quant_receipt", type="boolean", nullable=true)
     */
    private $dstQuantReceipt;


}

