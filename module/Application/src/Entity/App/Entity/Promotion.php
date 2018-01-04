<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="promotion_type", type="smallint", nullable=true)
     */
    private $promotionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_mode", type="smallint", nullable=true)
     */
    private $promotionMode;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_min", type="bigint", nullable=true)
     */
    private $quantityMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_lim", type="bigint", nullable=true)
     */
    private $quantityLim;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_max", type="bigint", nullable=true)
     */
    private $quantityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_ticket_type_key", type="smallint", nullable=true)
     */
    private $extraTicketTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=true)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_header", type="string", length=250, nullable=true)
     */
    private $promotionHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_message", type="string", length=250, nullable=true)
     */
    private $promotionMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_command", type="string", length=250, nullable=true)
     */
    private $promotionCommand;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="md_partial", type="boolean", nullable=true)
     */
    private $mdPartial;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_discount", type="smallint", nullable=true)
     */
    private $flagDiscount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=true)
     */
    private $reasonTypeKey;

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

    /**
     * @var string
     *
     * @ORM\Column(name="option_11", type="string", length=250, nullable=true)
     */
    private $option11;

    /**
     * @var string
     *
     * @ORM\Column(name="option_12", type="string", length=250, nullable=true)
     */
    private $option12;

    /**
     * @var string
     *
     * @ORM\Column(name="option_13", type="string", length=250, nullable=true)
     */
    private $option13;

    /**
     * @var string
     *
     * @ORM\Column(name="option_14", type="string", length=250, nullable=true)
     */
    private $option14;

    /**
     * @var string
     *
     * @ORM\Column(name="option_15", type="string", length=250, nullable=true)
     */
    private $option15;

    /**
     * @var string
     *
     * @ORM\Column(name="option_16", type="string", length=250, nullable=true)
     */
    private $option16;

    /**
     * @var string
     *
     * @ORM\Column(name="option_17", type="string", length=250, nullable=true)
     */
    private $option17;

    /**
     * @var string
     *
     * @ORM\Column(name="option_18", type="string", length=250, nullable=true)
     */
    private $option18;

    /**
     * @var string
     *
     * @ORM\Column(name="option_19", type="string", length=250, nullable=true)
     */
    private $option19;

    /**
     * @var string
     *
     * @ORM\Column(name="option_20", type="string", length=250, nullable=true)
     */
    private $option20;

    /**
     * @var integer
     *
     * @ORM\Column(name="source", type="smallint", nullable=true)
     */
    private $source = '0';


}

