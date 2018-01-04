<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleExtra
 *
 * @ORM\Table(name="sale_extra")
 * @ORM\Entity
 */
class SaleExtra
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
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_number", type="integer", nullable=false)
     */
    private $invoiceNumber = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=true)
     */
    private $saleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=true)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=8, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=10, nullable=true)
     */
    private $cfop;

    /**
     * @var string
     *
     * @ORM\Column(name="base_icms", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $baseIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="icms", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $icms;

    /**
     * @var string
     *
     * @ORM\Column(name="base_subst", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $baseSubst;

    /**
     * @var string
     *
     * @ORM\Column(name="icms_subst", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $icmsSubst;

    /**
     * @var string
     *
     * @ORM\Column(name="amo_items", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amoItems;

    /**
     * @var string
     *
     * @ORM\Column(name="frete", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $frete;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $seguro;

    /**
     * @var string
     *
     * @ORM\Column(name="outras", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $outras;

    /**
     * @var string
     *
     * @ORM\Column(name="ipi", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $ipi;

    /**
     * @var string
     *
     * @ORM\Column(name="amo_invoice", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amoInvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="store2_key", type="bigint", nullable=true)
     */
    private $store2Key;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_type", type="smallint", nullable=true)
     */
    private $invoiceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_key", type="bigint", nullable=true)
     */
    private $fromKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_key", type="bigint", nullable=true)
     */
    private $toKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_comment", type="text", length=65535, nullable=true)
     */
    private $saleComment;

    /**
     * @var string
     *
     * @ORM\Column(name="request_comment", type="text", length=65535, nullable=true)
     */
    private $requestComment;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_name", type="string", length=22, nullable=true)
     */
    private $saleName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var integer
     *
     * @ORM\Column(name="delivery_item_id", type="bigint", nullable=true)
     */
    private $deliveryItemId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emission_date", type="date", nullable=true)
     */
    private $emissionDate;


}

