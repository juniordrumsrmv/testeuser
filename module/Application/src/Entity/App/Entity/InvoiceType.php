<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceType
 *
 * @ORM\Table(name="invoice_type")
 * @ORM\Entity
 */
class InvoiceType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_type_key", type="smallint", nullable=false)
     */
    private $invoiceTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_name", type="string", length=30, nullable=false)
     */
    private $invoiceName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_print", type="boolean", nullable=true)
     */
    private $invoicePrint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_in_out", type="boolean", nullable=true)
     */
    private $invoiceInOut;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop", type="string", length=10, nullable=true)
     */
    private $invoiceCfop;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop_inter", type="string", length=10, nullable=true)
     */
    private $invoiceCfopInter;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop_st", type="string", length=10, nullable=true)
     */
    private $invoiceCfopSt;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop_st_inter", type="string", length=10, nullable=true)
     */
    private $invoiceCfopStInter;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_comment", type="text", length=65535, nullable=true)
     */
    private $invoiceComment;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_message", type="text", length=65535, nullable=true)
     */
    private $invoiceMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_last_change_time", type="datetime", nullable=true)
     */
    private $invoiceLastChangeTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_extra_type", type="boolean", nullable=true)
     */
    private $invoiceExtraType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_receipt", type="boolean", nullable=true)
     */
    private $invoiceReceipt;


}

